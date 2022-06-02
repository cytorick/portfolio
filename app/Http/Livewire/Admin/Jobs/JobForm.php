<?php

namespace App\Http\Livewire\Admin\Jobs;

use App\Models\Job;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class JobForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public Job $editing;

    protected function rules()
    {
        return [
            'editing.company' => ['required'],
            'editing.function' => ['required'],
            'editing.street' => ['required'],
            'editing.place' => ['required'],
            'editing.start_date' => [],
            'editing.end_date' => [],
            'editing.website' => ['required'],
            'editing.contract_type' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'editing.learned' => ['nullable'],
            'image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.company' => ['nullable'],
            'editing.function' => ['nullable'],
            'editing.street' => ['nullable'],
            'editing.place' => ['nullable'],
            'editing.start_date' => [],
            'editing.end_date' => [],
            'editing.website' => ['nullable'],
            'editing.contract_type' => ['nullable'],
            'editing.is_active' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'editing.learned' => ['nullable'],
            'image' => ['nullable'],
        ]);
    }

    public function save(Request $request)
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('jobs-logo');
        }

        $this->editing->save();

        return redirect()->route('admin.jobs');
    }

    public function mount($jobId = null)
    {
        $this->editing = empty($jobId)
            ? $this->createNewJob()
            : Job::find($jobId);

        if ($jobId) {
            $this->editing = Job::find($jobId);
        } else {
            $this->editing = $this->createNewJob();
        }
    }

    public function createNewJob()
    {
        return Job::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.jobs.job-form');
    }
}
