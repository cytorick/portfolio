<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.admin.skill.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.admin.skill.form');
    }

    public function renderEditForm ($skillId)
    {
        return view('pages.admin.skill.form')
            ->with('skill', $this->getRows($skillId));
    }

    private function getRows ($skillId)
    {
        try {
            return Skill::findOrFail($skillId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}

