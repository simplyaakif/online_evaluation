<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SessionDuration;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SessionDurationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('session_duration_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-duration.index');
    }

    public function create()
    {
        abort_if(Gate::denies('session_duration_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-duration.create');
    }

    public function edit(SessionDuration $sessionDuration)
    {
        abort_if(Gate::denies('session_duration_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-duration.edit', compact('sessionDuration'));
    }

    public function show(SessionDuration $sessionDuration)
    {
        abort_if(Gate::denies('session_duration_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-duration.show', compact('sessionDuration'));
    }
}
