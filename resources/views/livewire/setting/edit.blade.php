<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('setting.field') ? 'invalid' : '' }}">
        <label class="form-label" for="field">{{ trans('cruds.setting.fields.field') }}</label>
        <input class="form-control" type="text" name="field" id="field" wire:model.defer="setting.field">
        <div class="validation-message">
            {{ $errors->first('setting.field') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.field_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('setting.value') ? 'invalid' : '' }}">
        <label class="form-label" for="value">{{ trans('cruds.setting.fields.value') }}</label>
        <input class="form-control" type="text" name="value" id="value" wire:model.defer="setting.value">
        <div class="validation-message">
            {{ $errors->first('setting.value') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.setting.fields.value_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>