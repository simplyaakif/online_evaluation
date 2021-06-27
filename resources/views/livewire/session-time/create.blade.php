<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('sessionTime.time') ? 'invalid' : '' }}">
        <label class="form-label" for="time">{{ trans('cruds.sessionTime.fields.time') }}</label>
        <input class="form-control" type="text" name="time" id="time" wire:model.defer="sessionTime.time">
        <div class="validation-message">
            {{ $errors->first('sessionTime.time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.sessionTime.fields.time_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.session-times.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>