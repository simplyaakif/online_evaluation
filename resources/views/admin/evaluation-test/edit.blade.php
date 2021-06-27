@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.evaluationTest.title_singular') }}:
                    {{ trans('cruds.evaluationTest.fields.id') }}
                    {{ $evaluationTest->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('evaluation-test.edit', [$evaluationTest])
        </div>
    </div>
</div>
@endsection