@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.speaking.title_singular') }}:
                    {{ trans('cruds.speaking.fields.id') }}
                    {{ $speaking->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.speaking.fields.id') }}
                            </th>
                            <td>
                                {{ $speaking->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.speaking.fields.speaking_question') }}
                            </th>
                            <td>
                                {{ $speaking->speaking_question }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.speaking.fields.marks') }}
                            </th>
                            <td>
                                {{ $speaking->marks }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.speaking.fields.evaluation_test') }}
                            </th>
                            <td>
                                @if($speaking->evaluationTest)
                                    <span class="badge badge-relationship">{{ $speaking->evaluationTest->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('speaking_edit')
                    <a href="{{ route('admin.speakings.edit', $speaking) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.speakings.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection