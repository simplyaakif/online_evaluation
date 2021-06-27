<?php

namespace App\Http\Livewire\SessionDuration;

use App\Models\SessionDuration;
use Livewire\Component;

class Create extends Component
{
    public SessionDuration $sessionDuration;

    public function mount(SessionDuration $sessionDuration)
    {
        $this->sessionDuration = $sessionDuration;
    }

    public function render()
    {
        return view('livewire.session-duration.create');
    }

    public function submit()
    {
        $this->validate();

        $this->sessionDuration->save();

        return redirect()->route('admin.session-durations.index');
    }

    protected function rules(): array
    {
        return [
            'sessionDuration.session_duration' => [
                'string',
                'nullable',
            ],
        ];
    }
}
