<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Listening;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListeningController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('listening_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listening.index');
    }

    public function create()
    {
        abort_if(Gate::denies('listening_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listening.create');
    }

    public function edit(Listening $listening)
    {
        abort_if(Gate::denies('listening_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.listening.edit', compact('listening'));
    }

    public function show(Listening $listening)
    {
        abort_if(Gate::denies('listening_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $listening->load('evaluationTest');

        return view('admin.listening.show', compact('listening'));
    }

    public function storeMedia(Request $request)
    {
        abort_if(Gate::none(['listening_create', 'listening_edit']), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->has('size')) {
            $this->validate($request, [
                'file' => 'max:' . $request->input('size') * 1024,
            ]);
        }

        $model                     = new Listening();
        $model->id                 = $request->input('model_id', 0);
        $model->exists             = true;
        $media                     = $model->addMediaFromRequest('file')->toMediaCollection($request->input('collection_name'));
        $media->wasRecentlyCreated = true;

        return response()->json(compact('media'), Response::HTTP_CREATED);
    }
}
