@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.sessionDuration.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('session_duration_create')
                <a class="btn btn-indigo" href="{{ route('admin.session-durations.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.sessionDuration.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('session-duration.index')

</div>
@endsection