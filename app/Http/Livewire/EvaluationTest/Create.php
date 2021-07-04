<?php

namespace App\Http\Livewire\EvaluationTest;

use App\Models\EvaluationTest;
use Livewire\Component;

class Create extends Component
{
    public EvaluationTest $evaluationTest;


    public function mount(EvaluationTest $evaluationTest)
    {
        $this->evaluationTest = $evaluationTest;
    }

    public function render()
    {
        return view('livewire.evaluation-test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->evaluationTest->save();

        return redirect()->route('admin.evaluation-tests.index');
    }

    protected function rules(): array
    {
        return [
            'evaluationTest.title' => [
                'string',
                'nullable',
            ],
            'evaluationTest.limit_mcq' => [
                'string',
                'nullable',
            ],
        ];
    }
}
