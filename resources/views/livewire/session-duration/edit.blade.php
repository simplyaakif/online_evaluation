<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('sessionDuration.session_duration') ? 'invalid' : '' }}">
        <label class="form-label" for="session_duration">{{ trans('cruds.sessionDuration.fields.session_duration') }}</label>
        <input class="form-control" type="text" name="session_duration" id="session_duration" wire:model.defer="sessionDuration.session_duration">
        <div class="validation-message">
            {{ $errors->first('sessionDuration.session_duration') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.sessionDuration.fields.session_duration_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.session-durations.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>