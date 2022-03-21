<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public $projects;

    public function __construct($id = null)
    {
        $this->projects = Project::where('archived', 0)->orderBy('id', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.projects.index');
    }
}
