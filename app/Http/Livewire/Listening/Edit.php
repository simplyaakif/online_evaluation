<?php

namespace App\Http\Livewire\Listening;

use App\Models\EvaluationTest;
use App\Models\Listening;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Listening $listening;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Listening $listening)
    {
        $this->listening = $listening;
        $this->initListsForFields();
        $this->mediaCollections = [
            'listening_audio' => $listening->audio,
        ];
    }

    public function render()
    {
        return view('livewire.listening.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->listening->save();
        $this->syncMedia();

        return redirect()->route('admin.listenings.index');
    }

    public function addMedia($media): void
    {
        $this->mediaCollections[$media['collection_name']][] = $media;
    }

    public function removeMedia($media): void
    {
        $collection = collect($this->mediaCollections[$media['collection_name']]);

        $this->mediaCollections[$media['collection_name']] = $collection->reject(fn ($item) => $item['uuid'] === $media['uuid'])->toArray();

        $this->mediaToRemove[] = $media['uuid'];
    }

    public function getMediaCollection($name)
    {
        return $this->mediaCollections[$name];
    }

    protected function rules(): array
    {
        return [
            'listening.question' => [
                'string',
                'nullable',
            ],
            'mediaCollections.listening_audio' => [
                'array',
                'nullable',
            ],
            'mediaCollections.listening_audio.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'listening.marks' => [
                'string',
                'nullable',
            ],
            'listening.evaluation_test_id' => [
                'integer',
                'exists:evaluation_tests,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['evaluation_test'] = EvaluationTest::pluck('title', 'id')->toArray();
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->listening->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
