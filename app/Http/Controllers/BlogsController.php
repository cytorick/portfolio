<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.blog.list');
    }
}
