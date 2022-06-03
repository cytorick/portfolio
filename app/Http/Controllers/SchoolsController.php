<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Skill;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SchoolsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.admin.school.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.admin.school.form');
    }

    public function renderEditForm ($schoolId)
    {
        return view('pages.admin.school.form')
            ->with('school', $this->getRows($schoolId));
    }

    private function getRows ($schoolId)
    {
        try {
            return School::findOrFail($schoolId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
