<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('answer.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.answer.fields.title') }}</label>
        <textarea class="form-control" name="title" id="title" wire:model.defer="answer.title" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('answer.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answer.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('answer.correct') ? 'invalid' : '' }}">
        <label class="form-label" for="correct">{{ trans('cruds.answer.fields.correct') }}</label>
        <input class="form-control" type="checkbox" name="correct" id="correct" wire:model.defer="answer.correct">
        <div class="validation-message">
            {{ $errors->first('answer.correct') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answer.fields.correct_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('answer.reason') ? 'invalid' : '' }}">
        <label class="form-label" for="reason">{{ trans('cruds.answer.fields.reason') }}</label>
        <textarea class="form-control" name="reason" id="reason" wire:model.defer="answer.reason" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('answer.reason') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answer.fields.reason_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('answer.question_id') ? 'invalid' : '' }}">
        <label class="form-label" for="question">{{ trans('cruds.answer.fields.question') }}</label>
        <x-select-list class="form-control" id="question" name="question" :options="$this->listsForFields['question']" wire:model="answer.question_id" />
        <div class="validation-message">
            {{ $errors->first('answer.question_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.answer.fields.question_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.answers.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>