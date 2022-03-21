<?php

namespace App\Http\Livewire\Language;

use App\Models\Language;
use Livewire\Component;

class LanguageForm extends Component
{
    public $save;

    public Language $editing;

    protected function rules()
    {
        return [
            'editing.level' => ['required'],
            'editing.name' => ['required'],
            'editing.percentage' => ['required'],
            'editing.image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.level' => ['required'],
            'editing.name' => ['required'],
            'editing.percentage' => ['required'],
            'editing.image' => ['nullable'],
        ]);
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

//        setMessage('Shipping rate successfully saved.');
        return  redirect()->route('admin.language');
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
            'name' => null,
            'image' => null,
            'level' => null,
            'percentage' => null,
            'archived' => 0,
        ]);
    }

    public function render()
    {
        return view('livewire.language.language-form');
    }
}
