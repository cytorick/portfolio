<?php

namespace App\Http\Livewire\Admin\Texts;

use App\Models\Text;
use Livewire\Component;
use Livewire\WithFileUploads;

class TextForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public Text $editing;

    protected function rules()
    {
        return [
            'editing.page' => ['nullable'],
            'editing.number' => ['nullable'],
            'editing.title' => ['nullable'],
            'editing.content' => ['nullable'],
            'image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.page' => ['nullable'],
            'editing.number' => ['nullable'],
            'editing.title' => ['nullable'],
            'editing.content' => ['nullable'],
            'image' => ['nullable'],
        ]);
    }

    public function save()
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('text-image');
        }

        $this->editing->save();

        $this->dispatchBrowserEvent('notify', 'Successfully saved text!');
        return  redirect()->route('admin.texts');
    }

    public function SkillRedirect()
    {
        $this->redirect('/');
    }

    public function mount($textId = null)
    {
        $this->editing = empty($textId)
            ? $this->createNewSkill()
            : Text::find($textId);

        if ($textId) {
            $this->editing = Text::find($textId);
        } else {
            $this->editing = $this->createNewSkill();
        }
    }

    public function createNewSkill()
    {
        return Text::make([
            'page' => null,
            'number' => null,
            'title' => null,
            'content' => null,
        ]);
    }


    public function render()
    {
        return view('livewire.admin.texts.text-form');
    }
}
