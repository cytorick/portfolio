<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Models\Project;
use App\Models\ProjectSkill;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public Project $editing;

    protected function rules()
    {
        return [
            'editing.title' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.company' => ['nullable'],
            'editing.made_at' => [],
//            'editing.icon' => ['nullable'],
            'image' => ['nullable'],
            'editing.link' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.title' => ['nullable'],
            'editing.description' => ['nullable'],
            'editing.company' => ['nullable'],
            'editing.made_at' => [],
//            'editing.icon' => ['nullable'],
            'image' => ['nullable'],
            'editing.link' => ['nullable'],
        ]);
    }

    public function save(Request $request)
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('projects-thumb');
        }

        $this->editing->save();

        return redirect()->route('admin.projects');
    }

    public function deleteSkill($skillId)
    {
        $project = ProjectSkill::find($skillId);
        $project->delete();

        return redirect()->route('admin.edit.projects', ['projectId' => $this->editing->id]);
    }


    public function mount($projectId = null)
    {
        $this->emitUp('projectId', $projectId);

        $this->editing = empty($projectId)
            ? $this->createNewJob()
            : Project::find($projectId);

        if ($projectId) {
            $this->editing = Project::find($projectId);
        } else {
            $this->editing = $this->createNewJob();
        }
    }

    public function createNewJob()
    {
        return Project::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.projects.project-form');
    }
}
