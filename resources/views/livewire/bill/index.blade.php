<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('bill_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan



        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.bill.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.bill.fields.candidate') }}
                            @include('components.table.sort', ['field' => 'candidate.name'])
                        </th>
                        <th>
                            {{ trans('cruds.bill.fields.amount') }}
                            @include('components.table.sort', ['field' => 'amount'])
                        </th>
                        <th>
                            {{ trans('cruds.bill.fields.due_date') }}
                            @include('components.table.sort', ['field' => 'due_date'])
                        </th>
                        <th>
                            {{ trans('cruds.bill.fields.status') }}
                            @include('components.table.sort', ['field' => 'status'])
                        </th>
                        <th>
                            {{ trans('cruds.bill.fields.paid_on') }}
                            @include('components.table.sort', ['field' => 'paid_on'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($bills as $bill)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $bill->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $bill->id }}
                            </td>
                            <td>
                                @if($bill->candidate)
                                    <span class="badge badge-relationship">{{ $bill->candidate->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $bill->amount }}
                            </td>
                            <td>
                                {{ $bill->due_date }}
                            </td>
                            <td>
                                {{ $bill->status_label }}
                            </td>
                            <td>
                                {{ $bill->paid_on }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('bill_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.bills.show', $bill) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('bill_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.bills.edit', $bill) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('bill_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $bill->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $bills->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush