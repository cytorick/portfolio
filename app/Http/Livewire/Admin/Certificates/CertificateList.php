<?php

namespace App\Http\Livewire\Admin\Certificates;

use App\Http\Livewire\Admin\Concerns\DataTable\WithBulkActions;
use App\Http\Livewire\Admin\Concerns\DataTable\WithPerPagePagination;
use App\Http\Livewire\Admin\Concerns\DataTable\WithSorting;
use App\Models\Certificate;
use Livewire\Component;

class CertificateList extends Component
{
    use WithPerPagePagination, WithSorting, WithBulkActions;

    public $search;

    protected $defaultSorting = [ 'field' => 'id', 'order' => 'desc' ];

    protected $listeners = [ 'refreshCertificates' => '$refresh' ];

    public function updatedSearch ()
    {
        $this->resetPage();
    }

    public function archiveSelected()
    {
        $archiveCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($certificate) {
            if ($certificate->archived == 0) {
                Certificate::where('id', $certificate->id)->update([
                    'archived' => 1,
                ]);
            } else {
                Certificate::where('id', $certificate->id)->update([
                    'archived' => 0,
                ]);
            }
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve archived ' . $archiveCount . ' certificates');
    }

    public function deleteSelected()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->each(function ($certificate) {
            $certificate->delete();
        });

        $this->deselectAll();

        $this->dispatchBrowserEvent('notify', 'You\'ve deleted ' . $deleteCount . ' certificates');
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
        return view('livewire.admin.certificates.certificate-list')
            ->with('certificates', $this->rows);
    }
}
