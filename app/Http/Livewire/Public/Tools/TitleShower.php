<?php

namespace App\Http\Livewire\Public\Tools;

use App\Models\Text;
use Livewire\Component;

class TitleShower extends Component
{
    public $text;

    public function mount($page, $number)
    {
        $this->text = Text::where('archived', 0)->where('page', $page)->where('number', $number)->first();
    }

    public function render()
    {
        return view('livewire.public.tools.title-shower');
    }
}
