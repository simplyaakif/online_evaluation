<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('candidate_delete')
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
                            {{ trans('cruds.candidate.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.dp') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.mobile') }}
                            @include('components.table.sort', ['field' => 'mobile'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.address') }}
                            @include('components.table.sort', ['field' => 'address'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.user_account') }}
                            @include('components.table.sort', ['field' => 'user_account.name'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.dob') }}
                            @include('components.table.sort', ['field' => 'dob'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.cnic') }}
                            @include('components.table.sort', ['field' => 'cnic'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.first_language') }}
                            @include('components.table.sort', ['field' => 'first_language'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.profession') }}
                            @include('components.table.sort', ['field' => 'profession'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.city') }}
                            @include('components.table.sort', ['field' => 'city'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.country') }}
                            @include('components.table.sort', ['field' => 'country'])
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.nationality') }}
                            @include('components.table.sort', ['field' => 'nationality'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($candidates as $candidate)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $candidate->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $candidate->id }}
                            </td>
                            <td>
                                @foreach($candidate->dp as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $candidate->name }}
                            </td>
                            <td>
                                {{ $candidate->mobile }}
                            </td>
                            <td>
                                {{ $candidate->address }}
                            </td>
                            <td>
                                @if($candidate->userAccount)
                                    <span class="badge badge-relationship">{{ $candidate->userAccount->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $candidate->gender_label }}
                            </td>
                            <td>
                                {{ $candidate->dob }}
                            </td>
                            <td>
                                {{ $candidate->cnic }}
                            </td>
                            <td>
                                {{ $candidate->first_language }}
                            </td>
                            <td>
                                {{ $candidate->profession }}
                            </td>
                            <td>
                                {{ $candidate->city }}
                            </td>
                            <td>
                                {{ $candidate->country }}
                            </td>
                            <td>
                                {{ $candidate->nationality }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('candidate_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.candidates.show', $candidate) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('candidate_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.candidates.edit', $candidate) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('candidate_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $candidate->id }})" wire:loading.attr="disabled">
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
            {{ $candidates->links() }}
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