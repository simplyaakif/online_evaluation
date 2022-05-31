<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('course.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.course.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="course.title">
        <div class="validation-message">
            {{ $errors->first('course.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.title_helper') }}
        </div>
    </div>
        <div class="form-group {{ $errors->has('session_duration') ? 'invalid' : '' }}">
            <label class="form-label" for="session_duration">{{ trans('cruds.course.fields.session_duration') }}</label>
            <x-select-list class="form-control" id="session_duration" name="session_duration" wire:model="session_duration" :options="$this->listsForFields['session_duration']" multiple />
            <div class="validation-message">
                {{ $errors->first('session_duration') }}
            </div>
            <div class="help-block">
                {{ trans('cruds.course.fields.session_duration_helper') }}
            </div>
        </div>
    <div class="form-group {{ $errors->has('session_time') ? 'invalid' : '' }}">
        <label class="form-label" for="session_time">{{ trans('cruds.course.fields.session_time') }}</label>
        <x-select-list class="form-control" id="session_time" name="session_time" wire:model="session_time"
                       :options="$this->listsForFields['session_time']" multiple/>
        <div class="validation-message">
            {{ $errors->first('session_time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.session_time_helper') }}
        </div>
    </div>
    <div>
        <label for=""> Is Weekly Session Date - Mondays of next two months
            <input type="checkbox" wire:model="course.is_weekly">
        </label>
    </div>
    <div class="form-group {{ $errors->has('session_start_date') ? 'invalid' : '' }}">
        <label class="form-label" for="session_start_date">{{ trans('cruds.course.fields.session_start_date') }}</label>
        <x-select-list class="form-control" id="session_start_date" name="session_start_date"
                       wire:model="session_start_date" :options="$this->listsForFields['session_start_date']" multiple/>
        <div class="validation-message">
            {{ $errors->first('session_start_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.session_start_date_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
