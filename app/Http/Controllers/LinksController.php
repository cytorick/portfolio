<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function renderIndex()
    {
        return view('pages.admin.links.list');
    }

    public function renderCreateForm()
    {
        return view('pages.admin.links.form');
    }

    public function renderEditForm($linkId)
    {
        return view('pages.admin.links.form')
            ->with('link', $this->getRows($linkId));
    }

    private function getRows($linkId)
    {
        try {
            return Link::findOrFail($linkId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
