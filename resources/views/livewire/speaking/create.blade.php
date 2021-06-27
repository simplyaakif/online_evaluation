<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('speaking.speaking_question') ? 'invalid' : '' }}">
        <label class="form-label" for="speaking_question">{{ trans('cruds.speaking.fields.speaking_question') }}</label>
        <textarea class="form-control" name="speaking_question" id="speaking_question" wire:model.defer="speaking.speaking_question" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('speaking.speaking_question') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.speaking.fields.speaking_question_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('speaking.marks') ? 'invalid' : '' }}">
        <label class="form-label" for="marks">{{ trans('cruds.speaking.fields.marks') }}</label>
        <input class="form-control" type="text" name="marks" id="marks" wire:model.defer="speaking.marks">
        <div class="validation-message">
            {{ $errors->first('speaking.marks') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.speaking.fields.marks_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('speaking.evaluation_test_id') ? 'invalid' : '' }}">
        <label class="form-label" for="evaluation_test">{{ trans('cruds.speaking.fields.evaluation_test') }}</label>
        <x-select-list class="form-control" id="evaluation_test" name="evaluation_test" :options="$this->listsForFields['evaluation_test']" wire:model="speaking.evaluation_test_id" />
        <div class="validation-message">
            {{ $errors->first('speaking.evaluation_test_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.speaking.fields.evaluation_test_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.speakings.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>