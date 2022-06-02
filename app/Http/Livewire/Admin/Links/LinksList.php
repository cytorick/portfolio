<?php

namespace App\Http\Livewire\Admin\Links;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\Link;
use Livewire\Component;

class LinksList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $listeners = [ 'refreshLinks' => '$refresh' ];

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($link) {
            if ($link->archived == 0) {
                Link::where('id', $link->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Link::where('id', $link->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' links');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($link) {
            $link->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' links');
    }

    public function getRowsQueryProperty ()
    {
        $query = Link::withFilters([
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
        return view('livewire.admin.links.links-list')
            ->with('links', $this->rows);
    }
}
