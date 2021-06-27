@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.question.title_singular') }}:
                    {{ trans('cruds.question.fields.id') }}
                    {{ $question->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.question.fields.id') }}
                            </th>
                            <td>
                                {{ $question->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.question.fields.question') }}
                            </th>
                            <td>
                                {{ $question->question }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.question.fields.evaluation_test') }}
                            </th>
                            <td>
                                @if($question->evaluationTest)
                                    <span class="badge badge-relationship">{{ $question->evaluationTest->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.question.fields.marks') }}
                            </th>
                            <td>
                                {{ $question->marks }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('question_edit')
                    <a href="{{ route('admin.questions.edit', $question) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection