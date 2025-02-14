<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function home()
    {
        return view('events.home');
    }
    public function index()
    {
        return view('events.index');
    }
    public function create()
    {
        return view('events.create');
    }
}
