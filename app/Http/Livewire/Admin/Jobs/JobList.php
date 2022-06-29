<?php

namespace App\Http\Livewire\Admin\Jobs;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\Job;
use Livewire\Component;

class JobList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $listeners = [ 'refreshJobs' => '$refresh' ];

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($job) {
            if ($job->archived == 0) {
                Job::where('id', $job->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Job::where('id', $job->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' job(s)');
    }

    public function featureSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($job) {
            if ($job->featured == 0) {
                Job::where('id', $job->id)->update([
                    'featured' => 1,
                ]);
            } else {
                Job::where('id', $job->id)->update([
                    'featured' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve featured ' . $archiveCount . ' job(s)');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($jobs) {
            $jobs->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' job(s)');
    }

    public function getRowsQueryProperty ()
    {
        $query = Job::withFilters([
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
        return view('livewire.admin.jobs.job-list')
            ->with('jobs', $this->rows);
    }
}
