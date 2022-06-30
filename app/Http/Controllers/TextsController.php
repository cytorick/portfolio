<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TextsController extends Controller
{
    public function renderIndex()
    {
        return view('pages.admin.texts.list');
    }

    public function renderCreateForm()
    {
        return view('pages.admin.texts.form');
    }

    public function renderEditForm($textId)
    {
        return view('pages.admin.texts.form')
            ->with('text', $this->getRows($textId));
    }

    private function getRows($textId)
    {
        try {
            return Text::findOrFail($textId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
