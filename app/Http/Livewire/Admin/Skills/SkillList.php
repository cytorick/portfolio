<?php

namespace App\Http\Livewire\Admin\Skills;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\Skill;
use Livewire\Component;

class SkillList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = ['field' => 'id', 'order' => 'asc'];

    protected $listeners = ['refreshSkills' => '$refresh'];

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($skill) {
            $skill->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' skills');
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

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' skills');
    }

    public function getRowsQueryProperty()
    {
        $query = Skill::withFilters([
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
        return view('livewire.admin.skills.skill-list')
            ->with('skills', $this->rows);
    }
}
