<?php

namespace App\Http\Livewire\Speaking;

use App\Models\EvaluationTest;
use App\Models\Speaking;
use Livewire\Component;

class Create extends Component
{
    public Speaking $speaking;

    public array $listsForFields = [];

    public function mount(Speaking $speaking)
    {
        $this->speaking = $speaking;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.speaking.create');
    }

    public function submit()
    {
        $this->validate();

        $this->speaking->save();

        return redirect()->route('admin.speakings.index');
    }

    protected function rules(): array
    {
        return [
            'speaking.speaking_question' => [
                'string',
                'nullable',
            ],
            'speaking.marks' => [
                'string',
                'nullable',
            ],
            'speaking.evaluation_test_id' => [
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
}
