<?php

namespace App\Http\Livewire\Admin\Schools;

use App\Models\School;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class SchoolForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public School $editing;

    protected function rules()
    {
        return [
            'editing.schools' => ['required'],
            'editing.name' => ['required'],
            'editing.street' => ['required'],
            'editing.place' => ['required'],
            'editing.start_date' => ['nullable'],
            'editing.end_date' => ['nullable'],
            'editing.status' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.schools' => ['nullable'],
            'editing.name' => ['nullable'],
            'editing.street' => ['nullable'],
            'editing.place' => ['nullable'],
            'editing.status' => ['nullable'],
            'editing.end_date' => ['nullable'],
            'editing.contract_type' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'image' => ['nullable'],
        ]);
    }

    public function save(Request $request)
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('schools-logo');
        }

        $this->editing->save();

        return redirect()->route('admin.schools');


    }

    public function mount($schoolId = null)
    {
        $this->editing = empty($jobId)
            ? $this->createNewJob()
            : School::find($schoolId);

        if ($schoolId) {
            $this->editing = School::find($schoolId);
        } else {
            $this->editing = $this->createNewJob();
        }
    }

    public function createNewJob()
    {
        return School::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.schools.school-form');
    }
}
