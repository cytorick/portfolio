<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.admin.job.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.admin.job.form');
    }

    public function renderEditForm ($jobId)
    {
        return view('pages.admin.job.form')
            ->with('job', $this->getRows($jobId));
    }

    private function getRows ($jobId)
    {
        try {
            return Job::findOrFail($jobId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
