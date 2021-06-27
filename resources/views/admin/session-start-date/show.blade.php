@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.view') }}
                {{ trans('cruds.sessionStartDate.title_singular') }}:
                {{ trans('cruds.sessionStartDate.fields.id') }}
                {{ $sessionStartDate->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            <table class="table table-view">
                <tbody class="bg-white">
                    <tr>
                        <th>
                            {{ trans('cruds.sessionStartDate.fields.id') }}
                        </th>
                        <td>
                            {{ $sessionStartDate->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sessionStartDate.fields.start_date') }}
                        </th>
                        <td>
                            {{ $sessionStartDate->start_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <a href="{{ route('admin.session-start-dates.index') }}" class="btn btn-secondary">
                {{ trans('global.back') }}
            </a>
        </div>
    </div>
</div>
@endsection