<?php

namespace App\Http\Livewire\Search;

use App\Http\Livewire\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Concerns\DataTable\WithSorting;
use App\Models\Lot;
use Livewire\Component;

class Index extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $filters = [
        'auction_status' => false, // true = Active, false = Closed
        'distilleries' => [],
        'distillery_statuses' => [],
        'ages' => [],
        'whiskytypes' => [],
        'volumes' => [],
        'countries' => [],
        // 'strengths' => [],
    ];

    public $search;

    protected $defaultSorting = [ 'field' => 'name', 'order' => 'asc' ];

    protected $queryString = [ 'sorts' ];

    protected $listeners = [ 'updatedLotFilters' => 'setSelectedFilters' ];

    public function rules () { return [
        'editing.name' => 'required|min:4',
        'editing.code' => 'required|min:2',
        'editing.url' => 'required',
        'editing.status' => 'required',
    ]; }

    public function mount ($search)
    {
        $this->search = $search;

        // Set default value for the auction status.
        $this->filters['auction_status'] = liveAuction() ? true : false;
    }

    public function updatedFilters ()
    {
        $this->resetPage();
    }

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function toggleShowFilters ()
    {
        $this->showFilters = ! $this->showFilters;
    }

    public function getLotsQueryProperty ()
    {
        $search = $this->search;

        // Check if the an auction opened or closed
        $this->checkAuctionStatusChange();

        return Lot::when($this->filters['auction_status'], function ($query) {
            $query->where('status', 'live');
        })
            ->when(!$this->filters['auction_status'], function ($query) {
                $query->where('status', 'closed');
            })
            ->where(function ($query) use ($search) {
                $query->where('name', 'LIKE', '%'. $search .'%')
                    ->orWhere('description', 'LIKE', '%'. $search .'%')
                    ->orWhereHas('whiskies', function ($query) use ($search) {
                        $query->whereHas('distillery', function ($query) use ($search) {
                            $query->where('name', 'LIKE', '%'. $search .'%');
                        });
                    })
                    ->orWhereHas('whiskies', function ($query) use ($search) {
                        $query->whereHas('bottler', function ($query) use ($search) {
                            $query->where('name', 'LIKE', '%'. $search .'%');
                        });
                    });
            });
    }

    public function getRowsQueryProperty ()
    {
        $filters = $this->filters;

        $query = $this->lotsQuery

            // Apply filters.
            ->withFilters($filters);

        return $this->applySorting($query);
    }

    public function getRowsProperty ()
    {
        return $this->applyPagination($this->rowsQuery);
    }



    /**
     * Set the selected filter values on this component's instance.
     */
    public function setSelectedFilters ($filters)
    {
        $this->filters = $filters;
    }

    /**
     * Check if the an auction opened or closed
     *
     * @return void
     */
    protected function checkAuctionStatusChange ()
    {

    }


    public function render()
    {
        return view('livewire.search.index')
            ->with('result', $this->rows);
    }
}
