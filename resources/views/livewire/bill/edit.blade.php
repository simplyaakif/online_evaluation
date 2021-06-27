<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('bill.candidate_id') ? 'invalid' : '' }}">
        <label class="form-label" for="candidate">{{ trans('cruds.bill.fields.candidate') }}</label>
        <x-select-list class="form-control" id="candidate" name="candidate" :options="$this->listsForFields['candidate']" wire:model="bill.candidate_id" />
        <div class="validation-message">
            {{ $errors->first('bill.candidate_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bill.fields.candidate_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('bill.amount') ? 'invalid' : '' }}">
        <label class="form-label" for="amount">{{ trans('cruds.bill.fields.amount') }}</label>
        <input class="form-control" type="text" name="amount" id="amount" wire:model.defer="bill.amount">
        <div class="validation-message">
            {{ $errors->first('bill.amount') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bill.fields.amount_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('bill.due_date') ? 'invalid' : '' }}">
        <label class="form-label" for="due_date">{{ trans('cruds.bill.fields.due_date') }}</label>
        <x-date-picker class="form-control" wire:model="bill.due_date" id="due_date" name="due_date" picker="date" />
        <div class="validation-message">
            {{ $errors->first('bill.due_date') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bill.fields.due_date_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('bill.status') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.bill.fields.status') }}</label>
        <select class="form-control" wire:model="bill.status">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['status'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('bill.status') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bill.fields.status_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('bill.paid_on') ? 'invalid' : '' }}">
        <label class="form-label" for="paid_on">{{ trans('cruds.bill.fields.paid_on') }}</label>
        <x-date-picker class="form-control" wire:model="bill.paid_on" id="paid_on" name="paid_on" picker="date" />
        <div class="validation-message">
            {{ $errors->first('bill.paid_on') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.bill.fields.paid_on_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.bills.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>