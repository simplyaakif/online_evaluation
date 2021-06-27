@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.course.title_singular') }}:
                    {{ trans('cruds.course.fields.id') }}
                    {{ $course->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.course.fields.id') }}
                            </th>
                            <td>
                                {{ $course->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.course.fields.title') }}
                            </th>
                            <td>
                                {{ $course->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.course.fields.session_duration') }}
                            </th>
                            <td>
                                @foreach($course->sessionDuration as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->session_duration }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.course.fields.session_time') }}
                            </th>
                            <td>
                                @foreach($course->sessionTime as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->time }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.course.fields.session_start_date') }}
                            </th>
                            <td>
                                @foreach($course->sessionStartDate as $key => $entry)
                                    <span class="badge badge-relationship">{{ $entry->start_date }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('course_edit')
                    <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection