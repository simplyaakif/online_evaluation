<?php

namespace App\Http\Livewire\Candidate;

use App\Models\Candidate;
use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Edit extends Component
{
    public Candidate $candidate;

    public array $mediaToRemove = [];

    public array $listsForFields = [];

    public array $mediaCollections = [];

    public function mount(Candidate $candidate)
    {
        $this->candidate = $candidate;
        $this->initListsForFields();
        $this->mediaCollections = [
            'candidate_dp' => $candidate->dp,
        ];
    }

    public function render()
    {
        return view('livewire.candidate.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->candidate->save();
        $this->syncMedia();

        return redirect()->route('admin.candidates.index');
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
            'mediaCollections.candidate_dp' => [
                'array',
                'nullable',
            ],
            'mediaCollections.candidate_dp.*.id' => [
                'integer',
                'exists:media,id',
            ],
            'candidate.name' => [
                'string',
                'nullable',
            ],
            'candidate.mobile' => [
                'string',
                'nullable',
            ],
            'candidate.address' => [
                'string',
                'nullable',
            ],
            'candidate.user_account_id' => [
                'integer',
                'exists:users,id',
                'nullable',
            ],
            'candidate.gender' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['gender'])),
            ],
            'candidate.dob' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'candidate.cnic' => [
                'string',
                'nullable',
            ],
            'candidate.first_language' => [
                'string',
                'nullable',
            ],
            'candidate.profession' => [
                'string',
                'nullable',
            ],
            'candidate.city' => [
                'string',
                'nullable',
            ],
            'candidate.country' => [
                'string',
                'nullable',
            ],
            'candidate.nationality' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['user_account'] = User::pluck('name', 'id')->toArray();
        $this->listsForFields['gender']       = $this->candidate::GENDER_RADIO;
    }

    protected function syncMedia(): void
    {
        collect($this->mediaCollections)->flatten(1)
            ->each(fn ($item) => Media::where('uuid', $item['uuid'])
            ->update(['model_id' => $this->candidate->id]));

        Media::whereIn('uuid', $this->mediaToRemove)->delete();
    }
}
