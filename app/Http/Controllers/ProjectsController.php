<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\School;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function renderIndex()
    {
        return view('pages.admin.projects.list');
    }

    public function renderCreateForm()
    {
        return view('pages.admin.projects.form');
    }

    public function renderEditForm($projectId)
    {
        return view('pages.admin.projects.form')
            ->with('projects', $this->getRows($projectId));
    }

    private function getRows($projectId)
    {
        try {
            return Project::findOrFail($projectId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
