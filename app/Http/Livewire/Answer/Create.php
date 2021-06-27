<?php

namespace App\Http\Livewire\Answer;

use App\Models\Answer;
use App\Models\Question;
use Livewire\Component;

class Create extends Component
{
    public Answer $answer;

    public array $listsForFields = [];

    public function mount(Answer $answer)
    {
        $this->answer = $answer;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.answer.create');
    }

    public function submit()
    {
        $this->validate();

        $this->answer->save();

        return redirect()->route('admin.answers.index');
    }

    protected function rules(): array
    {
        return [
            'answer.title' => [
                'string',
                'nullable',
            ],
            'answer.correct' => [
                'boolean',
            ],
            'answer.reason' => [
                'string',
                'nullable',
            ],
            'answer.question_id' => [
                'integer',
                'exists:questions,id',
                'nullable',
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['question'] = Question::pluck('question', 'id')->toArray();
    }
}
