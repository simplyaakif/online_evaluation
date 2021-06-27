<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('candidate.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.candidate.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="candidate.name">
        <div class="validation-message">
            {{ $errors->first('candidate.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.mobile') ? 'invalid' : '' }}">
        <label class="form-label" for="mobile">{{ trans('cruds.candidate.fields.mobile') }}</label>
        <input class="form-control" type="text" name="mobile" id="mobile" wire:model.defer="candidate.mobile">
        <div class="validation-message">
            {{ $errors->first('candidate.mobile') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.mobile_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.address') ? 'invalid' : '' }}">
        <label class="form-label" for="address">{{ trans('cruds.candidate.fields.address') }}</label>
        <input class="form-control" type="text" name="address" id="address" wire:model.defer="candidate.address">
        <div class="validation-message">
            {{ $errors->first('candidate.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.address_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.user_account_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user_account">{{ trans('cruds.candidate.fields.user_account') }}</label>
        <x-select-list class="form-control" id="user_account" name="user_account" :options="$this->listsForFields['user_account']" wire:model="candidate.user_account_id" />
        <div class="validation-message">
            {{ $errors->first('candidate.user_account_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.user_account_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.gender') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.candidate.fields.gender') }}</label>
        @foreach($this->listsForFields['gender'] as $key => $value)
            <label class="radio-label"><input type="radio" name="gender" wire:model="candidate.gender" value="{{ $key }}">{{ $value }}</label>
        @endforeach
        <div class="validation-message">
            {{ $errors->first('candidate.gender') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.dob') ? 'invalid' : '' }}">
        <label class="form-label" for="dob">{{ trans('cruds.candidate.fields.dob') }}</label>
        <x-date-picker class="form-control" wire:model="candidate.dob" id="dob" name="dob" picker="date" />
        <div class="validation-message">
            {{ $errors->first('candidate.dob') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.dob_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.cnic') ? 'invalid' : '' }}">
        <label class="form-label" for="cnic">{{ trans('cruds.candidate.fields.cnic') }}</label>
        <input class="form-control" type="text" name="cnic" id="cnic" wire:model.defer="candidate.cnic">
        <div class="validation-message">
            {{ $errors->first('candidate.cnic') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.cnic_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.first_language') ? 'invalid' : '' }}">
        <label class="form-label" for="first_language">{{ trans('cruds.candidate.fields.first_language') }}</label>
        <input class="form-control" type="text" name="first_language" id="first_language" wire:model.defer="candidate.first_language">
        <div class="validation-message">
            {{ $errors->first('candidate.first_language') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.first_language_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.profession') ? 'invalid' : '' }}">
        <label class="form-label" for="profession">{{ trans('cruds.candidate.fields.profession') }}</label>
        <input class="form-control" type="text" name="profession" id="profession" wire:model.defer="candidate.profession">
        <div class="validation-message">
            {{ $errors->first('candidate.profession') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.profession_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.city') ? 'invalid' : '' }}">
        <label class="form-label" for="city">{{ trans('cruds.candidate.fields.city') }}</label>
        <input class="form-control" type="text" name="city" id="city" wire:model.defer="candidate.city">
        <div class="validation-message">
            {{ $errors->first('candidate.city') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.city_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.country') ? 'invalid' : '' }}">
        <label class="form-label" for="country">{{ trans('cruds.candidate.fields.country') }}</label>
        <input class="form-control" type="text" name="country" id="country" wire:model.defer="candidate.country">
        <div class="validation-message">
            {{ $errors->first('candidate.country') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.country_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('candidate.nationality') ? 'invalid' : '' }}">
        <label class="form-label" for="nationality">{{ trans('cruds.candidate.fields.nationality') }}</label>
        <input class="form-control" type="text" name="nationality" id="nationality" wire:model.defer="candidate.nationality">
        <div class="validation-message">
            {{ $errors->first('candidate.nationality') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.candidate.fields.nationality_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.candidates.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>