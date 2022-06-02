<?php

namespace App\Http\Livewire\Admin\Tools;

use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class FlushCache extends Component
{
    /**
     * The module to flush the cache for.
     */
    public $module = null;

    /**
     * Initialise the component.
     *
     * @param String $module
     */
    public function mount ($module = null)
    {
        $this->module = $module;
    }

    /**
     * Flush the cache.
     */
    public function flushCache ()
    {
        Cache::flush();

        $this->dispatchBrowserEvent('notify', 'Cache successfully flushed.');
    }

    public function render()
    {
        return view('livewire.admin.tools.flush-cache');
    }
}
