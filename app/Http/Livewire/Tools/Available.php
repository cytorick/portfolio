<?php

namespace App\Http\Livewire\Tools;

use App\Models\Setting;
use Livewire\Component;

class Available extends Component
{

    public function mount()
    {
        $this->available = Setting::where('name', 'available')->get();
    }
    public function render()
    {
        return view('livewire.tools.available');
    }
}
