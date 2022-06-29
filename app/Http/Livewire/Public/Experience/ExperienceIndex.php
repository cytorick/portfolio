<?php

namespace App\Http\Livewire\Public\Experience;

use App\Models\Certificate;
use App\Models\Internship;
use App\Models\Job;
use App\Models\School;
use Livewire\Component;

class ExperienceIndex extends Component
{
    public function __construct ()
    {
        $this->jobs = Job::where('archived', 0)->where('featured', 1)->orderBy('end_date', 'desc')->get();
        $this->internships = Internship::where('archived', 0)->where('featured', 1)->orderBy('end_date', 'desc')->get();
        $this->schools = School::where('archived', 0)->where('featured', 1)->orderBy('end_date', 'desc')->get();
        $this->certificates = Certificate::where('archived', 0)->where('featured', 1)->orderBy('end_date', 'desc')->get();

    }

    public function render()
    {
        return view('livewire.public.experience.experience-index');
    }
}
