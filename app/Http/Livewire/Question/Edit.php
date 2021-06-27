<?php

namespace App\Http\Livewire\Question;

use App\Models\EvaluationTest;
use App\Models\Question;
use Livewire\Component;

class Edit extends Component
{
    public Question $question;

    public array $listsForFields = [];

    public function mount(Question $question)
    {
        $this->question = $question;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.question.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->question->save();

        return redirect()->route('admin.questions.index');
    }

    protected function rules(): array
    {
        return [
            'question.question' => [
                'string',
                'nullable',
            ],
            'question.evaluation_test_id' => [
                'integer',
                'exists:evaluation_tests,id',
                'nullable',
            ],
            'question.marks' => [
                'string',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['evaluation_test'] = EvaluationTest::pluck('title', 'id')->toArray();
    }
}
