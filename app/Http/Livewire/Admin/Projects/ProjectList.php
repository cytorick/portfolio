<?php

namespace App\Http\Livewire\Admin\Projects;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\Project;
use Livewire\Component;

class ProjectList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = [ 'field' => 'made_at', 'order' => 'desc' ];

    protected $listeners = [ 'refreshProjects' => '$refresh' ];

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($project) {
            if ($project->archived == 0) {
                Project::where('id', $project->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Project::where('id', $project->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' project(s)');
    }

    public function featureSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($project) {
            if ($project->featured == 0) {
                Project::where('id', $project->id)->update([
                    'featured' => 1,
                ]);
            } else {
                Project::where('id', $project->id)->update([
                    'featured' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve featured ' . $archiveCount . ' project(s)');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($project) {
            $project->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' project(s)');
    }

    public function getRowsQueryProperty ()
    {
        $query = Project::withFilters([
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
        return view('livewire.admin.projects.project-list')
            ->with('projects', $this->rows);
    }
}
