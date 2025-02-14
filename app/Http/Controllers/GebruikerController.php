<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GebruikerController extends Controller
{
    public function home()
    {
        return view('gebruiker.home');
    }
}
