<?php

namespace App\Http\Livewire\Certificate;

use App\Http\Livewire\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Concerns\DataTable\WithCachedRows;
use App\Http\Livewire\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Concerns\DataTable\WithSorting;
use App\Models\Certificate;
use Livewire\Component;

class CertificateList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $filters = [];

    public $search;

    public $showFilters = false;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $queryString = [ 'sorts' ];

    protected $listeners = [ 'refreshCertificates' => '$refresh' ];

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
        $query = Certificate::withFilters([
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
        return view('livewire.certificate.certificate-list')
            ->with('certificates', $this->rows);
    }
}
