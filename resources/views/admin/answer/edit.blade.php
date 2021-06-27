@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.answer.title_singular') }}:
                    {{ trans('cruds.answer.fields.id') }}
                    {{ $answer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('answer.edit', [$answer])
        </div>
    </div>
</div>
@endsection