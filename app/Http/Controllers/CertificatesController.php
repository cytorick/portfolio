<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Job;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.admin.certificate.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.admin.certificate.form');
    }

    public function renderEditForm ($certificateId)
    {
        return view('pages.admin.certificate.form')
            ->with('certificate', $this->getRows($certificateId));
    }

    private function getRows ($certificateId)
    {
        try {
            return Certificate::findOrFail($certificateId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
