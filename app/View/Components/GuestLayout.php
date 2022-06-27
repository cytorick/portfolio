<?php

namespace App\View\Components;

use App\Models\Link;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return View
     */
    public function render()
    {
        $this->links = Link::where('archived', 0)->where('featured', 1)->get();

        return view('layouts.guest')
            ->with('links', $this->links);
    }
}
