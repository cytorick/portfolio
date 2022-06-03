<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class InternshipsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.admin.internship.list');
    }

    public function renderCreateForm ()
    {
        return view('pages.admin.internship.form');
    }

    public function renderEditForm ($internshipId)
    {
        return view('pages.admin.internship.form')
            ->with('internship', $this->getRows($internshipId));
    }

    private function getRows ($internshipId)
    {
        try {
            return Internship::findOrFail($internshipId);
        } catch (ModelNotFoundException $exception) {
            abort(404);
        }
    }
}
