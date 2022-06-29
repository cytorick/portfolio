<?php

namespace App\Http\Livewire\Admin\Links;

use App\Models\Link;
use Livewire\Component;

class LinksForm extends Component
{
    public $save;

    public Link $editing;

    protected function rules()
    {
        return [
            'editing.name' => ['required'],
            'editing.link' => ['nullable'],
            'editing.icon' => ['nullable'],
            'editing.featured' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.name' => ['required'],
            'editing.link' => ['nullable'],
            'editing.icon' => ['nullable'],
            'editing.featured' => ['nullable'],
        ]);
    }

    public function save()
    {
        $this->validate();

        $this->editing->save();

        return redirect()->route('admin.links');
    }

    public function mount($linkId = null)
    {
        $this->editing = empty($linkId)
            ? $this->createNewJob()
            : Link::find($linkId);

        if ($linkId) {
            $this->editing = Link::find($linkId);
        } else {
            $this->editing = $this->createNewJob();
        }
    }

    public function createNewJob()
    {
        return Link::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.links.links-form');
    }
}
