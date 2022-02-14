<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use DB;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CandidateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('candidate_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidate.index');
    }

    public function create()
    {
        abort_if(Gate::denies('candidate_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidate.create');
    }

    public function edit(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.candidate.edit', compact('candidate'));
    }

    public function show(Candidate $candidate)
    {
        abort_if(Gate::denies('candidate_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $candidate->load('userAccount');

        $evaluations = DB::table('candidates')
            ->where('candidates.id',$candidate->id)
            ->join('candidate_courses','candidates.user_account_id','candidate_courses.user_id')
            ->join('candidate_evaluations','candidate_courses.id','candidate_evaluations.candidate_course_id')
            ->get();


        return view('admin.candidate.show', compact('candidate','evaluations'));
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['candidate_create', 'candidate_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }
        if (request()->has('max_width') || request()->has('max_height')) {
            $this->validate(request(), [
                'file' => sprintf(
                'image|dimensions:max_width=%s,max_height=%s',
                request()->input('max_width', 100000),
                request()->input('max_height', 100000)
                ),
            ]);
        }

        $model                     = new Candidate();
        $model->id                 = $request->input('model_id', 0);
        $model->exists             = true;
        $media                     = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));
        $media->wasRecentlyCreated = true;

        return response()->json(compact('media'), Response::HTTP_CREATED);
    }
}
