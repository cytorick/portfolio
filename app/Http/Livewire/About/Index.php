<?php

namespace App\Http\Livewire\About;

use App\Models\Internship;
use App\Models\Language;
use App\Models\Skill;
use Carbon\Carbon;
use Livewire\Component;

class Index extends Component
{

    public function mount()
    {
        $this->age = Carbon::parse('1999-12-29')->age;
        $this->skills = Skill::where('archived', 0)->orderBy('id', 'asc')->get();
        $this->languages = Language::where('archived', 0)->orderBy('id', 'asc')->get();
        $this->internships = Internship::where('archived', 0)->orderBy('end_date', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.about.index');
    }
}
