<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.projects.list');
    }
}
