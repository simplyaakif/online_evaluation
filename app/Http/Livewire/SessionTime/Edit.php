<?php

namespace App\Http\Livewire\SessionTime;

use App\Models\SessionTime;
use Livewire\Component;

class Edit extends Component
{
    public SessionTime $sessionTime;

    public function mount(SessionTime $sessionTime)
    {
        $this->sessionTime = $sessionTime;
    }

    public function render()
    {
        return view('livewire.session-time.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->sessionTime->save();

        return redirect()->route('admin.session-times.index');
    }

    protected function rules(): array
    {
        return [
            'sessionTime.time' => [
                'string',
                'nullable',
            ],
        ];
    }
}
