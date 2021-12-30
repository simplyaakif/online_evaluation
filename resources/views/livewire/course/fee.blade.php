<div>
    @foreach($session_durations as $duration)
    <div class="flex border border-gray-200 items-center">
        <div class="m-2 p-2">{{$duration->session_duration}}</div>
        <div class="m-2 p-2">
            <input type="text" wire:model.defer="prices.{{$duration->id}}">
        </div>
    </div>
    @endforeach
    <div>
        <button wire:click="submit" class="btn btn-primary mt-2">Submit</button>
    </div>
</div>
