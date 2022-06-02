<?php

namespace App\Http\Livewire\Public\Home;

use App\Models\Certificate;
use App\Models\Internship;
use App\Models\Job;
use App\Models\Language;
use App\Models\PageComponent;
use App\Models\Project;
use App\Models\School;
use App\Models\Skill;
use Carbon\Carbon;
use Livewire\Component;

class HomeIndex extends Component
{
    public function mount()
    {
        $this->age = Carbon::parse('1999-12-29')->age;
        $this->jobs = Job::where('archived', 0)->take(6)->orderBy('end_date', 'desc')->get();
        $this->internships = Internship::where('archived', 0)->orderBy('end_date', 'desc')->get();
        $this->languages = Language::where('archived', 0)->orderBy('id', 'asc')->get();
        $this->skills = Skill::where('archived', 0)->orderBy('id', 'asc')->get();
        $this->schools = School::where('archived', 0)->orderBy('end_date', 'desc')->get();
        $this->certificates = Certificate::where('archived', 0)->orderBy('start_date', 'desc')->get();
        $this->projects = Project::where('archived', 0)->take(3)->orderBy('created_at', 'desc')->get();
    }

    public function render()
    {
        return view('livewire.public.home.home-index');
    }
}
