<?php

namespace App\Http\Livewire\Skill;

use App\Models\Skill;
use Livewire\Component;

class SkillForm extends Component
{
    public $save;

    public Skill $editing;

    protected function rules()
    {
        return [
            'editing.icon' => ['required'],
            'editing.name' => ['required'],
            'editing.color' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.icon' => ['required'],
            'editing.name' => ['required'],
            'editing.color' => ['nullable'],
        ]);
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

//        setMessage('Shipping rate successfully saved.');
        return  redirect()->route('admin.skill');
    }

    public function SkillRedirect()
    {
        $this->redirect('/');
    }

    public function mount($skillId = null)
    {
        $this->editing = empty($skillId)
            ? $this->createNewSkill()
            : Skill::find($skillId);

        if ($skillId) {
            $this->editing = Skill::find($skillId);
        } else {
            $this->editing = $this->createNewSkill();
        }
    }

    public function createNewSkill()
    {
        return Skill::make([
            'icon' => null,
            'name' => null,
            'color' => null,
        ]);
    }

    public function render()
    {
        return view('livewire.skill.skill-form');
    }
}
