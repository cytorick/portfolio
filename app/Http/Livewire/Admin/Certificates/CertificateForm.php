<?php

namespace App\Http\Livewire\Admin\Certificates;

use App\Models\Certificate;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class CertificateForm extends Component
{
    use WithFileUploads;

    public $save, $image;

    public Certificate $editing;

    protected function rules()
    {
        return [
            'editing.name' => ['nullable'],
            'editing.schools' => ['nullable'],
            'editing.start_date' => [],
            'editing.end_date' => [],
            'editing.summary' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'image' => ['nullable'],
        ];
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'editing.name' => ['required'],
            'editing.schools' => ['required'],
            'editing.start_date' => [],
            'editing.end_date' => [],
            'editing.summary' => ['nullable'],
            'editing.introduction' => ['nullable'],
            'image' => ['nullable'],
        ]);
    }

    public function save(Request $request)
    {
        $this->validate();

        if ($this->image) {
            $this->editing
                ->addMedia($this->image)
                ->toMediaCollection('certificates-logo');
        }

        $this->editing->save();

        return redirect()->route('admin.certificates');
    }

    public function mount($certificateId = null)
    {
        $this->editing = empty($certificateId)
            ? $this->createNewJob()
            : Certificate::find($certificateId);

        if ($certificateId) {
            $this->editing = Certificate::find($certificateId);

        } else {
            $this->editing = $this->createNewJob();
        }
    }

    public function createNewJob()
    {
        return Certificate::make([

        ]);
    }

    public function render()
    {
        return view('livewire.admin.certificates.certificate-form');
    }
}
