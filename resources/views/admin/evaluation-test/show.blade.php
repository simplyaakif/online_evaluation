@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.evaluationTest.title_singular') }}:
                    {{ trans('cruds.evaluationTest.fields.id') }}
                    {{ $evaluationTest->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.evaluationTest.fields.id') }}
                            </th>
                            <td>
                                {{ $evaluationTest->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.evaluationTest.fields.title') }}
                            </th>
                            <td>
                                {{ $evaluationTest->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.evaluationTest.fields.limit_mcq') }}
                            </th>
                            <td>
                                {{ $evaluationTest->limit_mcq }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('evaluation_test_edit')
                    <a href="{{ route('admin.evaluation-tests.edit', $evaluationTest) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.evaluation-tests.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection