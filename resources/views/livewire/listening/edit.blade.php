<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('listening.question') ? 'invalid' : '' }}">
        <label class="form-label" for="question">{{ trans('cruds.listening.fields.question') }}</label>
        <textarea class="form-control" name="question" id="question" wire:model.defer="listening.question" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('listening.question') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listening.fields.question_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.listening_audio') ? 'invalid' : '' }}">
        <label class="form-label" for="audio">{{ trans('cruds.listening.fields.audio') }}</label>
        <x-dropzone id="audio" name="audio" action="{{ route('admin.listenings.storeMedia') }}" collection-name="listening_audio" max-file-size="10" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.listening_audio') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listening.fields.audio_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listening.marks') ? 'invalid' : '' }}">
        <label class="form-label" for="marks">{{ trans('cruds.listening.fields.marks') }}</label>
        <input class="form-control" type="text" name="marks" id="marks" wire:model.defer="listening.marks">
        <div class="validation-message">
            {{ $errors->first('listening.marks') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listening.fields.marks_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('listening.evaluation_test_id') ? 'invalid' : '' }}">
        <label class="form-label" for="evaluation_test">{{ trans('cruds.listening.fields.evaluation_test') }}</label>
        <x-select-list class="form-control" id="evaluation_test" name="evaluation_test" :options="$this->listsForFields['evaluation_test']" wire:model="listening.evaluation_test_id" />
        <div class="validation-message">
            {{ $errors->first('listening.evaluation_test_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.listening.fields.evaluation_test_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.listenings.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>