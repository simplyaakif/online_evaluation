<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SessionStartDate;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SessionStartDateController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('session_start_date_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-start-date.index');
    }

    public function create()
    {
        abort_if(Gate::denies('session_start_date_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-start-date.create');
    }

    public function edit(SessionStartDate $sessionStartDate)
    {
        abort_if(Gate::denies('session_start_date_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-start-date.edit', compact('sessionStartDate'));
    }

    public function show(SessionStartDate $sessionStartDate)
    {
        abort_if(Gate::denies('session_start_date_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.session-start-date.show', compact('sessionStartDate'));
    }
}
