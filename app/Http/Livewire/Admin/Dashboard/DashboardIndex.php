<?php

namespace App\Http\Livewire\Admin\Dashboard;

use App\Models\Certificate;
use App\Models\Internship;
use App\Models\Job;
use App\Models\Language;
use App\Models\Link;
use App\Models\Project;
use App\Models\School;
use App\Models\Skill;
use App\Models\User;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DashboardIndex extends Component
{

    public function mount()
    {
        $this->jobCount = Job::count();
        $this->schoolCount = School::count();
        $this->certificateCount = Certificate::count();
        $this->skillCount = Skill::count();
        $this->projectCount = Project::count();
        $this->internshipCount = Internship::count();
        $this->mediaCount = Media::count();
        $this->userCount = User::count();
        $this->linkCount = Link::count();
        $this->languageCount = Language::count();
    }

    public function render()
    {
        return view('livewire.admin.dashboard.dashboard-index');
    }
}
