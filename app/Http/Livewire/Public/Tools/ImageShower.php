<?php

namespace App\Http\Livewire\Public\Tools;

use App\Models\Text;
use Livewire\Component;

class ImageShower extends Component
{
    public $text, $class;

    public function mount($page, $number, $class)
    {
        $this->text = Text::where('archived', 0)->where('page', $page)->where('number', $number)->first();
        $this->class = $class;
    }

    public function render()
    {
        return view('livewire.public.tools.image-shower');
    }
}
