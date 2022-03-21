<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.skill.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.skill.form');
    }

    public function renderEditForm ($skillId)
    {
        return view('pages.skill.form')
            ->with('skill', $this->getSkill($skillId));
    }

    private function getSkill ($skillId)
    {
        try {
            return Skill::findOrFail($skillId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}

