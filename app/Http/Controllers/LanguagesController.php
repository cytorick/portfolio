<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.language.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.language.form');
    }

    public function renderEditForm ($languageId)
    {
        return view('pages.language.form')
            ->with('language', $this->getLanguage($languageId));
    }


    private function getLanguage ($languageId)
    {
        try {
            return Language::findOrFail($languageId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
