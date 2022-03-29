<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.job.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.job.form');
    }

    public function renderEditForm ($jobId)
    {
        return view('pages.job.form')
            ->with('job', $this->getJob($jobId));
    }

    public function renderDetails ($jobId)
    {
        return view('pages.job.details')
            ->with('job', $this->getJob($jobId));
    }

    private function getJob ($jobId)
    {
        try {
            return Job::findOrFail($jobId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
