<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.admin.language.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.admin.language.form');
    }

    public function renderEditForm ($languageId)
    {
        return view('pages.admin.language.form')
            ->with('languages', $this->getRows($languageId));
    }


    private function getRows ($languageId)
    {
        try {
            return Language::findOrFail($languageId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
