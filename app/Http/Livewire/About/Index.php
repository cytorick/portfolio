<?php

namespace App\Http\Livewire\About;

use App\Models\Language;
use App\Models\Skill;
use Livewire\Component;

class Index extends Component
{

    public function __construct()
    {
        $this->skills = Skill::where('archived', 0)->orderBy('id', 'asc')->get();
        $this->languages = Language::where('archived', 0)->orderBy('id', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.about.index');
    }
}
