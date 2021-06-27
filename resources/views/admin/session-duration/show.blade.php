@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.sessionDuration.title_singular') }}:
                {{ trans('cruds.sessionDuration.fields.id') }}
                {{ $sessionDuration->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.sessionDuration.fields.id') }}
                        </th>
                        <td>
                            {{ $sessionDuration->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sessionDuration.fields.session_duration') }}
                        </th>
                        <td>
                            {{ $sessionDuration->session_duration }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.session-durations.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection