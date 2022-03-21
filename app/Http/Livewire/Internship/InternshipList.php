<?php

namespace App\Http\Livewire\Internship;

use App\Http\Livewire\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Concerns\DataTable\WithCachedRows;
use App\Http\Livewire\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Concerns\DataTable\WithSorting;
use App\Models\Internship;
use Livewire\Component;

class InternshipList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $filters = [];

    public $search;

    public $showFilters = false;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $queryString = [ 'sorts' ];

    protected $listeners = [ 'refreshInternships' => '$refresh' ];

    public function mount () {}

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function toggleShowFilters ()
    {
        $this->useCachedRows();

        $this->showFilters = ! $this->showFilters;
    }

    public function resetFilters ()
    {
        $this->reset('filters');
    }

    public function getRowsQueryProperty ()
    {
        $query = Internship::withFilters([
            'search' => $this->search,
        ]);

        return $this->applySorting($query);
    }

    public function getRowsProperty ()
    {
        return $this->applyPagination($this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.internship.internship-list')
            ->with('internships', $this->rows);
    }
}
