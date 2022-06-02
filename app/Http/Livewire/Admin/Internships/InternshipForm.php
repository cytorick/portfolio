<?php

namespace App\Http\Livewire\Admin\Internships;

use App\Models\Internship;
use Livewire\Component;
use Livewire\WithFileUploads;

class InternshipForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public Internship $editing;

    protected function rules()
    {
        return [
            'editing.company' => ['required'],
            'editing.name' => ['required'],
            'editing.street' => ['required'],
            'editing.place' => ['required'],
            'editing.start_date' => [],
            'editing.end_date' => [],
            'editing.website' => ['required'],
            'editing.contract_type' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.company' => ['nullable'],
            'editing.name' => ['nullable'],
            'editing.street' => ['nullable'],
            'editing.place' => ['nullable'],
            'editing.start_date' => [],
            'editing.end_date' => [],
            'editing.website' => ['nullable'],
            'editing.contract_type' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'image' => ['nullable'],
        ]);
    }

    public function save()
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('internships-logo');
        }

        $this->editing->save();

        return redirect()->route('admin.internships');
    }

    public function mount($internshipId = null)
    {
        $this->editing = empty($internshipId)
            ? $this->createNewJob()
            : Internship::find($internshipId);

        if ($internshipId) {
            $this->editing = Internship::find($internshipId);
        } else {
            $this->editing = $this->createNewJob();
        }
    }

    public function createNewJob()
    {
        return Internship::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.internships.internship-form');
    }
}
