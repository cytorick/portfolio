<?php

namespace App\Http\Livewire\Public\Projects;

use App\Models\Link;
use App\Models\Project;
use Livewire\Component;

class ProjectIndex extends Component
{
    public $projects;

    public function mount($id = null)
    {
        $this->projects = Project::where('archived', 0)->orderBy('made_at', 'desc')->get();
        $this->links = Link::where('archived', false)->get();
    }

    public function render()
    {
        return view('livewire.public.projects.project-index');
    }
}
