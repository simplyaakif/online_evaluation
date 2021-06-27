<?php

namespace App\Http\Livewire\SessionStartDate;

use App\Models\SessionStartDate;
use Livewire\Component;

class Edit extends Component
{
    public SessionStartDate $sessionStartDate;

    public function mount(SessionStartDate $sessionStartDate)
    {
        $this->sessionStartDate = $sessionStartDate;
    }

    public function render()
    {
        return view('livewire.session-start-date.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->sessionStartDate->save();

        return redirect()->route('admin.session-start-dates.index');
    }

    protected function rules(): array
    {
        return [
            'sessionStartDate.start_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
        ];
    }
}
