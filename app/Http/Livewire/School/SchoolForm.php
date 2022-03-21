<?php

namespace App\Http\Livewire\School;

use App\Models\Job;
use App\Models\School;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
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
            'editing.school' => ['required'],
            'editing.name' => ['required'],
            'editing.street' => ['required'],
            'editing.place' => ['required'],
            'editing.start_date' => ['nullable'],
            'editing.end_date' => ['nullable'],
            'editing.status' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'editing.learned' => ['nullable'],
            'editing.image' => ['required'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.school' => ['nullable'],
            'editing.name' => ['nullable'],
            'editing.street' => ['nullable'],
            'editing.place' => ['nullable'],
            'editing.status' => ['nullable'],
            'editing.end_date' => ['nullable'],
            'editing.contract_type' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'editing.learned' => ['nullable'],
            'editing.image' => ['nullable'],
        ]);
    }

    public function save(Request $request)
    {
        $this->validate();

        $this->editing->storeAs('img', 'dildo');

        $this->editing->save();

        return redirect()->route('admin.school');

//        $name = md5($this->image . microtime()).'.'.$this->photo->extension();


    }

    public function StoreImage(Request $request): bool|string
    {
        return $this->image->store('img', 'public');
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
            'school' => null,
            'name' => null,
            'image' => null,
            'street' => null,
            'place' => null,
            'start_date' => null,
            'end_date' => null,
            'is_active' => 0,
            'status' => null,
            'introduction' => null,
            'description' => null,
            'learned' => null,
        ]);
    }

    public function render()
    {
        return view('livewire.school.school-form');
    }
}
