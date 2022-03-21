<?php

namespace App\Http\Livewire\Language;

use App\Http\Livewire\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Concerns\DataTable\WithCachedRows;
use App\Http\Livewire\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Concerns\DataTable\WithSorting;
use App\Models\Language;
use Livewire\Component;

class LanguageList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $filters = [];

    public $search;
    public $showDeleteModal = false;
    public $showArchiveModal = false;

    public $showFilters = false;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $queryString = [ 'sorts' ];

    protected $listeners = [ 'refreshLanguages' => '$refresh' ];

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

    public function deleteSelected ()
    {
        $this->selectedRowsQuery->each(function ($location) {
            $location->delete();
        });
    }

    public function archiveSelected()
    {
        $this->selectedRowsQuery->each(function ($language) {
            if ($language->archived == 0) {
                Language::where('id', $language->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Language::where('id', $language->id)->update([
                    'archived' => 0,
                ]);
            }
        });
    }

    public function getRowsQueryProperty ()
    {
        $query = Language::withFilters([
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
        return view('livewire.language.language-list')
            ->with('languages', $this->rows);
    }
}
