<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('evaluationTest.title') ? 'invalid' : '' }}">
        <label class="form-label" for="title">{{ trans('cruds.evaluationTest.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" wire:model.defer="evaluationTest.title">
        <div class="validation-message">
            {{ $errors->first('evaluationTest.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.evaluationTest.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('evaluationTest.limit_mcq') ? 'invalid' : '' }}">
        <label class="form-label" for="limit_mcq">{{ trans('cruds.evaluationTest.fields.limit_mcq') }}</label>
        <input class="form-control" type="text" name="limit_mcq" id="limit_mcq" wire:model.defer="evaluationTest.limit_mcq">
        <div class="validation-message">
            {{ $errors->first('evaluationTest.limit_mcq') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.evaluationTest.fields.limit_mcq_helper') }}
        </div>
    </div>

   

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.evaluation-tests.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
