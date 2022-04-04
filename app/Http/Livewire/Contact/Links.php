<?php

namespace App\Http\Livewire\Contact;

use App\Models\Link;
use Livewire\Component;

class Links extends Component
{
    public function mount ()
    {
        $this->links = Link::where('archived', false)->get();
    }

    public function render()
    {
        return view('livewire.contact.links');
    }
}
