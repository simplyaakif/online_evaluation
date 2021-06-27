<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('sessionStartDate.start_date') ? 'invalid' : '' }}">
        <label class="form-label" for="start_date">{{ trans('cruds.sessionStartDate.fields.start_date') }}</label>
        <x-date-picker class="form-control" wire:model="sessionStartDate.start_date" id="start_date" name="start_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('sessionStartDate.start_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.sessionStartDate.fields.start_date_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.session-start-dates.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>