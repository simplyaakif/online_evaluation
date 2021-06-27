@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.listening.title_singular') }}:
                    {{ trans('cruds.listening.fields.id') }}
                    {{ $listening->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.listening.fields.id') }}
                            </th>
                            <td>
                                {{ $listening->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listening.fields.question') }}
                            </th>
                            <td>
                                {{ $listening->question }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listening.fields.audio') }}
                            </th>
                            <td>
                                @foreach($listening->audio as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listening.fields.marks') }}
                            </th>
                            <td>
                                {{ $listening->marks }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.listening.fields.evaluation_test') }}
                            </th>
                            <td>
                                @if($listening->evaluationTest)
                                    <span class="badge badge-relationship">{{ $listening->evaluationTest->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('listening_edit')
                    <a href="{{ route('admin.listenings.edit', $listening) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.listenings.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection