<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Speaking;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SpeakingController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('speaking_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speaking.index');
    }

    public function create()
    {
        abort_if(Gate::denies('speaking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speaking.create');
    }

    public function edit(Speaking $speaking)
    {
        abort_if(Gate::denies('speaking_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speaking.edit', compact('speaking'));
    }

    public function show(Speaking $speaking)
    {
        abort_if(Gate::denies('speaking_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speaking->load('evaluationTest');

        return view('admin.speaking.show', compact('speaking'));
    }
}
