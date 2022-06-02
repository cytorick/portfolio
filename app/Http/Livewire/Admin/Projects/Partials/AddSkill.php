<?php

namespace App\Http\Livewire\Admin\Projects\Partials;

use App\Models\ProjectSkill;
use App\Models\Skill;
use Livewire\Component;

class AddSkill extends Component
{
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $skill_id, $projectId;

    protected $listeners = [ 'projectId' => 'projectId' ];

    protected function rules()
    {
        return [
            'skill_id.*' => ['nullable']
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'skill_id.*' => ['nullable'],
        ]);
    }

    public function mount($projectId)
    {
//        dd($this->projectId);
        $this->projectId = $projectId;

        $this->skills = Skill::where('archived', 0)->get();
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }

    private function resetInputFields()
    {
        $this->skill_id = '';
    }

    public function projectId($value)
    {
        $this->projectId = $value;
    }

    public function save()
    {
        $this->validate();

        foreach ($this->skill_id as $key => $value) {
            ProjectSkill::create([
                'skill_id' => $this->skill_id[$key],
                'project_id' => $this->projectId
            ]);
        }

        return redirect()->route('admin.edit.projects', ['projectId' => $this->projectId]);

    }

    public function render()
    {
        return view('livewire.admin.projects.partials.add-skill');
    }
}
