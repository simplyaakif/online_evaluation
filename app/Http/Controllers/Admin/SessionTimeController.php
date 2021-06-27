<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SessionTime;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SessionTimeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('session_time_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-time.index');
    }

    public function create()
    {
        abort_if(Gate::denies('session_time_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-time.create');
    }

    public function edit(SessionTime $sessionTime)
    {
        abort_if(Gate::denies('session_time_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-time.edit', compact('sessionTime'));
    }

    public function show(SessionTime $sessionTime)
    {
        abort_if(Gate::denies('session_time_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-time.show', compact('sessionTime'));
    }
}
