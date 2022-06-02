<?php

namespace App\Http\Livewire\Admin\Languages;

use App\Models\Language;
use Livewire\Component;
use Livewire\WithFileUploads;

class LanguageForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public Language $editing;

    protected function rules()
    {
        return [
            'editing.level' => ['required'],
            'editing.name' => ['required'],
            'editing.percentage' => ['required'],
            'image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.level' => ['required'],
            'editing.name' => ['required'],
            'editing.percentage' => ['required'],
            'image' => ['nullable'],
        ]);
    }

    public function save()
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('languages-logo');
        }

        $this->editing->save();

//        setMessage('Shipping rate successfully saved.');
        return  redirect()->route('admin.languages');
    }

    public function SkillRedirect()
    {
        $this->redirect('/');
    }

    public function mount($languageId = null)
    {
        $this->editing = empty($languageId)
            ? $this->createNewLanguage()
            : Language::find($languageId);

        if ($languageId) {
            $this->editing = Language::find($languageId);
        } else {
            $this->editing = $this->createNewLanguage();
        }
    }

    public function createNewLanguage()
    {
        return Language::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.languages.language-form');
    }
}
