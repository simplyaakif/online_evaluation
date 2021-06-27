@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.bill.title_singular') }}:
                    {{ trans('cruds.bill.fields.id') }}
                    {{ $bill->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.id') }}
                            </th>
                            <td>
                                {{ $bill->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.candidate') }}
                            </th>
                            <td>
                                @if($bill->candidate)
                                    <span class="badge badge-relationship">{{ $bill->candidate->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.amount') }}
                            </th>
                            <td>
                                {{ $bill->amount }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.due_date') }}
                            </th>
                            <td>
                                {{ $bill->due_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.status') }}
                            </th>
                            <td>
                                {{ $bill->status_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.bill.fields.paid_on') }}
                            </th>
                            <td>
                                {{ $bill->paid_on }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('bill_edit')
                    <a href="{{ route('admin.bills.edit', $bill) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.bills.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection