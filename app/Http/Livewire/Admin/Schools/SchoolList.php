<?php

namespace App\Http\Livewire\Admin\Schools;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\School;
use Livewire\Component;

class SchoolList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = [ 'field' => 'end_date', 'order' => 'desc' ];

    protected $listeners = [ 'refreshJobs' => '$refresh' ];

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($school) {
            if ($school->archived == 0) {
                School::where('id', $school->id)->update([
                    'archived' => 1,
                ]);
            } else {
                School::where('id', $school->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' school(s)');
    }

    public function featureSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($school) {
            if ($school->featured == 0) {
                School::where('id', $school->id)->update([
                    'featured' => 1,
                ]);
            } else {
                School::where('id', $school->id)->update([
                    'featured' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve featured ' . $archiveCount . ' school(s)');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($school) {
            $school->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' school(s)');
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
        return view('livewire.admin.schools.school-list')
            ->with('schools', $this->rows);
    }
}
