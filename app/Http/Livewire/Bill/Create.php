<?php

namespace App\Http\Livewire\Bill;

use App\Models\Bill;
use App\Models\Candidate;
use Livewire\Component;

class Create extends Component
{
    public Bill $bill;

    public array $listsForFields = [];

    public function mount(Bill $bill)
    {
        $this->bill = $bill;
        $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.bill.create');
    }

    public function submit()
    {
        $this->validate();

        $this->bill->save();

        return redirect()->route('admin.bills.index');
    }

    protected function rules(): array
    {
        return [
            'bill.candidate_id' => [
                'integer',
                'exists:candidates,id',
                'nullable',
            ],
            'bill.amount' => [
                'string',
                'nullable',
            ],
            'bill.due_date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'bill.status' => [
                'nullable',
                'in:' . implode(',', array_keys($this->listsForFields['status'])),
            ],
            'bill.paid_on' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
        ];
    }

    protected function initListsForFields(): void
    {
        $this->listsForFields['candidate'] = Candidate::pluck('name', 'id')->toArray();
        $this->listsForFields['status']    = $this->bill::STATUS_SELECT;
    }
}
