<?php

namespace App\Http\Livewire\Candidate;

use App\Models\Candidate;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public Candidate $candidate;

    public array $listsForFields = [];

    public function mount(Candidate $candidate)
    {
        $this->candidate = $candidate;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.candidate.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->candidate->save();

        return redirect()->route('admin.candidates.index');
    }

    protected function rules(): array
    {
        return [
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
}
