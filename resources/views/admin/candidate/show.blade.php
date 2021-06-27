@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.candidate.title_singular') }}:
                    {{ trans('cruds.candidate.fields.id') }}
                    {{ $candidate->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.id') }}
                            </th>
                            <td>
                                {{ $candidate->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.name') }}
                            </th>
                            <td>
                                {{ $candidate->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.mobile') }}
                            </th>
                            <td>
                                {{ $candidate->mobile }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.address') }}
                            </th>
                            <td>
                                {{ $candidate->address }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.user_account') }}
                            </th>
                            <td>
                                @if($candidate->userAccount)
                                    <span class="badge badge-relationship">{{ $candidate->userAccount->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.gender') }}
                            </th>
                            <td>
                                {{ $candidate->gender_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.dob') }}
                            </th>
                            <td>
                                {{ $candidate->dob }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.cnic') }}
                            </th>
                            <td>
                                {{ $candidate->cnic }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.first_language') }}
                            </th>
                            <td>
                                {{ $candidate->first_language }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.profession') }}
                            </th>
                            <td>
                                {{ $candidate->profession }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.city') }}
                            </th>
                            <td>
                                {{ $candidate->city }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.country') }}
                            </th>
                            <td>
                                {{ $candidate->country }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.candidate.fields.nationality') }}
                            </th>
                            <td>
                                {{ $candidate->nationality }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('candidate_edit')
                    <a href="{{ route('admin.candidates.edit', $candidate) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.candidates.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection