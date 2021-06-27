<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('question.question') ? 'invalid' : '' }}">
        <label class="form-label" for="question">{{ trans('cruds.question.fields.question') }}</label>
        <input class="form-control" type="text" name="question" id="question" wire:model.defer="question.question">
        <div class="validation-message">
            {{ $errors->first('question.question') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.question.fields.question_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('question.evaluation_test_id') ? 'invalid' : '' }}">
        <label class="form-label" for="evaluation_test">{{ trans('cruds.question.fields.evaluation_test') }}</label>
        <x-select-list class="form-control" id="evaluation_test" name="evaluation_test" :options="$this->listsForFields['evaluation_test']" wire:model="question.evaluation_test_id" />
        <div class="validation-message">
            {{ $errors->first('question.evaluation_test_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.question.fields.evaluation_test_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('question.marks') ? 'invalid' : '' }}">
        <label class="form-label" for="marks">{{ trans('cruds.question.fields.marks') }}</label>
        <input class="form-control" type="text" name="marks" id="marks" wire:model.defer="question.marks">
        <div class="validation-message">
            {{ $errors->first('question.marks') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.question.fields.marks_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>