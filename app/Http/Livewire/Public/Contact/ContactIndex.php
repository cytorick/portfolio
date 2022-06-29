<?php

namespace App\Http\Livewire\Public\Contact;

use App\Models\Link;
use Livewire\Component;

class ContactIndex extends Component
{
    public function mount ()
    {
        $this->links = Link::where('archived', false)->get();
    }

    public function render()
    {
        return view('livewire.public.contact.contact-index');
    }
}
