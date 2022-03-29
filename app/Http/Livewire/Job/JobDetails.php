<?php

namespace App\Http\Livewire\Job;

use App\Models\Job;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class JobDetails extends Component
{
    use WithFileUploads;

    public $save, $image, $validatedData;

    public Job $editing;

    public function save(Request $request, $jobId = null)
    {
        $validatedData = $this->validate([
            'image' => ['image', 'max:1024'],
        ]);

//        $this->image->store('image');
        $validatedData['image'] = $this->image->store('img', 'public');

        Job::update($validatedData);

        return redirect()->route('admin.jobs');
    }
    public function mount($jobId = null)
    {
        $this->editing = empty($jobId)
            ?
            : Job::find($jobId);

        if ($jobId) {
            $this->editing = Job::find($jobId);
        }
    }

    public function render()
    {
        return view('livewire.job.job-details');
    }
}
