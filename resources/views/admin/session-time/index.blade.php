@extends('layouts.admin')
@section('content')
<div class="card bg-white">
    <div class="card-header border-b border-blueGray-200">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('cruds.sessionTime.title_singular') }}
                {{ trans('global.list') }}
            </h6>

            @can('session_time_create')
                <a class="btn btn-indigo" href="{{ route('admin.session-times.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.sessionTime.title_singular') }}
                </a>
            @endcan
        </div>
    </div>
    @livewire('session-time.index')

</div>
@endsection