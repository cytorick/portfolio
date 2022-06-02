<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function renderDashboard ()
    {
        return view('pages.admin.dashboard.dashboard');
    }
}
