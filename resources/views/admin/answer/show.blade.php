@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.answer.title_singular') }}:
                    {{ trans('cruds.answer.fields.id') }}
                    {{ $answer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.answer.fields.id') }}
                            </th>
                            <td>
                                {{ $answer->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.answer.fields.title') }}
                            </th>
                            <td>
                                {{ $answer->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.answer.fields.correct') }}
                            </th>
                            <td>
                                <input class="disabled:opacity-50 disabled:cursor-not-allowed" type="checkbox" disabled {{ $answer->correct ? 'checked' : '' }}>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.answer.fields.question') }}
                            </th>
                            <td>
                                @if($answer->question)
                                    <span class="badge badge-relationship">{{ $answer->question->question ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('answer_edit')
                    <a href="{{ route('admin.answers.edit', $answer) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.answers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection