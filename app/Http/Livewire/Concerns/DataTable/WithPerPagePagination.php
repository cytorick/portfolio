<?php

namespace App\Http\Livewire\Concerns\DataTable;

use Livewire\WithPagination;

trait WithPerPagePagination
{
    use WithPagination;

    /**
     * The number of items per page.
     *
     * @var Integer
     */
    public $perPage = 10;

    /**
     * Get the number of items per page from the user's session.
     *
     * @return void
     */
    public function mountWithPerPagePagination ()
    {
        $this->perPage = session()->get('perPage', $this->perPage);
    }

    /**
     * Store the number of items per page in the user's session.
     *
     * @return void
     */
    public function updatedPerPage ($value)
    {
        session()->put('perPage', $value);
        $this->resetPage();
    }

    /**
     * Return the current number of items per page.
     *
     * @return Integer
     */
    public function applyPagination ($query)
    {
        return $query->paginate($this->perPage);
    }

}
