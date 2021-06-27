<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EvaluationTest;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EvaluationTestController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('evaluation_test_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.evaluation-test.index');
    }

    public function create()
    {
        abort_if(Gate::denies('evaluation_test_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.evaluation-test.create');
    }

    public function edit(EvaluationTest $evaluationTest)
    {
        abort_if(Gate::denies('evaluation_test_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.evaluation-test.edit', compact('evaluationTest'));
    }

    public function show(EvaluationTest $evaluationTest)
    {
        abort_if(Gate::denies('evaluation_test_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.evaluation-test.show', compact('evaluationTest'));
    }
}
