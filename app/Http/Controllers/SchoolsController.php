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
        return view('pages.school.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.school.form');
    }

    public function renderEditForm ($schoolId)
    {
        return view('pages.school.form')
            ->with('school', $this->getSchool($schoolId));
    }

    private function getSchool ($schoolId)
    {
        try {
            return School::findOrFail($schoolId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
