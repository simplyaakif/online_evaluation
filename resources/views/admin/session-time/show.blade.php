@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.sessionTime.title_singular') }}:
                {{ trans('cruds.sessionTime.fields.id') }}
                {{ $sessionTime->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.sessionTime.fields.id') }}
                        </th>
                        <td>
                            {{ $sessionTime->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sessionTime.fields.time') }}
                        </th>
                        <td>
                            {{ $sessionTime->time }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.session-times.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection