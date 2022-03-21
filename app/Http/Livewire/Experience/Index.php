<?php

namespace App\Http\Livewire\Experience;

use App\Models\Certificate;
use App\Models\Internship;
use App\Models\Job;
use App\Models\School;
use App\Models\Skill;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{
    public $jobs, $internships, $schools, $certificates;

    /**
     *
     */
    public function __construct ()
    {
       $this->jobs = Job::where('archived', 0)->orderBy('end_date', 'desc')->get();

        $this->internships = Internship::where('archived', 0)->orderBy('end_date', 'desc')->get();

        $this->schools = School::where('archived', 0)->orderBy('end_date', 'desc')->get();

        $this->certificates = Certificate::where('archived', 0)->orderBy('end_date', 'desc')->get();

    }

    public function render(): Factory|View|Application
    {
        return view('livewire.experience.index');
    }
}
