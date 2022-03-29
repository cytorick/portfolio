<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Search in the system.
     *
     * @return \Illuminate\View\View
     */
    public function search ()
    {
        return view('website.pages.search.default');
    }
}
