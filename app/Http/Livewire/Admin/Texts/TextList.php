<?php

namespace App\Http\Livewire\Admin\Texts;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\Skill;
use App\Models\Text;
use Livewire\Component;

class TextList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = ['field' => 'page', 'order' => 'desc'];

    protected $listeners = ['refreshSkills' => '$refresh'];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($text) {
            $text->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' text(s)');
    }

    public function featureSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($text) {
            if ($text->featured == 0) {
                Text::where('id', $text->id)->update([
                    'featured' => 1,
                ]);
            } else {
                Text::where('id', $text->id)->update([
                    'featured' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve featured ' . $archiveCount . ' text(s)');
    }

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($text) {
            if ($text->archived == 0) {
                Text::where('id', $text->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Text::where('id', $text->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' text(s)');
    }

    public function getRowsQueryProperty()
    {
        $query = Text::withFilters([
            'search' => $this->search,
        ]);

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->applyPagination($this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.admin.texts.text-list')
            ->with('texts', $this->rows);
    }
}
