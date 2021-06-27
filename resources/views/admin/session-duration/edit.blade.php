@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.sessionDuration.title_singular') }}:
                {{ trans('cruds.sessionDuration.fields.id') }}
                {{ $sessionDuration->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('session-duration.edit', [$sessionDuration])
    </div>
</div>
@endsection