<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('listening_delete')
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
                            {{ trans('cruds.listening.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.listening.fields.question') }}
                            @include('components.table.sort', ['field' => 'question'])
                        </th>
                        <th>
                            {{ trans('cruds.listening.fields.audio') }}
                        </th>
                        <th>
                            {{ trans('cruds.listening.fields.marks') }}
                            @include('components.table.sort', ['field' => 'marks'])
                        </th>
                        <th>
                            {{ trans('cruds.listening.fields.evaluation_test') }}
                            @include('components.table.sort', ['field' => 'evaluation_test.title'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($listenings as $listening)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $listening->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $listening->id }}
                            </td>
                            <td>
                                {{ $listening->question }}
                            </td>
                            <td>
                                @foreach($listening->audio as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $listening->marks }}
                            </td>
                            <td>
                                @if($listening->evaluationTest)
                                    <span class="badge badge-relationship">{{ $listening->evaluationTest->title ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('listening_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.listenings.show', $listening) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('listening_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.listenings.edit', $listening) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('listening_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $listening->id }})" wire:loading.attr="disabled">
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
            {{ $listenings->links() }}
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