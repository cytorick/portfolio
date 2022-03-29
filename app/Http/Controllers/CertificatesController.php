<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function renderIndex ()
    {
        return view('pages.certificate.list');
    }
}
