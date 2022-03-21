<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function renderHome()
    {
        $age = Carbon::parse('1999-12-29')->age;

        return view('livewire.home.index', compact('age'));
    }
}
