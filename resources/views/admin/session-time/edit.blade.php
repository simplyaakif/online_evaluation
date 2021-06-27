@extends('layouts.admin')
@section('content')

<div class="card bg-blueGray-100">
    <div class="card-header">
        <div class="card-header-container">
            <h6 class="card-title">
                {{ trans('global.edit') }}
                {{ trans('cruds.sessionTime.title_singular') }}:
                {{ trans('cruds.sessionTime.fields.id') }}
                {{ $sessionTime->id }}
            </h6>
        </div>
    </div>

    <div class="card-body">
        @livewire('session-time.edit', [$sessionTime])
    </div>
</div>
@endsection