<?php

namespace App\Http\Livewire\School;

use App\Http\Livewire\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Concerns\DataTable\WithCachedRows;
use App\Http\Livewire\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Concerns\DataTable\WithSorting;
use App\Models\School;
use Livewire\Component;

class SchoolList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $filters = [];

    public $search;

    public $showFilters = false;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $queryString = [ 'sorts' ];

    protected $listeners = [ 'refreshJobs' => '$refresh' ];

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
        $query = School::withFilters([
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
        return view('livewire.school.school-list')
            ->with('schools', $this->rows);
    }
}
