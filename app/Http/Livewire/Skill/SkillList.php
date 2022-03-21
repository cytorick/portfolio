<?php

namespace App\Http\Livewire\Skill;

use App\Http\Livewire\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Concerns\DataTable\WithCachedRows;
use App\Http\Livewire\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Concerns\DataTable\WithSorting;
use App\Models\Skill;
use Livewire\Component;

class SkillList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions, WithCachedRows;

    public $showDeleteModal = false;
    public $showArchiveModal = false;
    public $showChangeStatusModal = false;

    public $showFilters = false;

    public $filters = [

    ];

    public $search;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'asc' ];

    protected $queryString = [ 'sorts' ];

    protected $listeners = [ 'refreshSkills' => '$refresh' ];

    public function mount () {

    }

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function deleteSelected ()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($skill) {
            $skill->delete();
        });

        $this->showDeleteModal = false;

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' skill');
    }

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($skill) {
            if ($skill->archived == 0) {
                Skill::where('id', $skill->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Skill::where('id', $skill->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->showArchiveModal = false;

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' skill');
    }

    public function toggleShowFilters ()
    {

        $this->showFilters = ! $this->showFilters;
    }

    public function resetFilters ()
    {
        $this->reset('filters');
    }

    public function getRowsQueryProperty ()
    {
        $query = Skill::withFilters([
            'search' => $this->search,
        ]);

        return $this->applySorting($query);
    }

    public function getRowsProperty ()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('livewire.skill.skill-list')
            ->with('skills', $this->rows);
    }
}
