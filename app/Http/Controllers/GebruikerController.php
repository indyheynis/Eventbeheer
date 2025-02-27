<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gebruiker;

class GebruikerController extends Controller
{
    public function home()
    {
        return view('gebruiker.home');
    }

    public function register()
    {
        return view('gebruiker.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $gebruiker = new Gebruiker();
        $gebruiker->name = $request->name;
        $gebruiker->email = $request->email;
        $gebruiker->password = $request->password;
        $gebruiker->role = $request->role;
        $gebruiker->save();

        return redirect()->route('gebruiker.home');
    }

    public function login()
    {
        return view('gebruiker.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $gebruiker = Gebruiker::where('email', $request->email)->where('password', $request->password)->first();

        if ($gebruiker) {
            return redirect()->route('gebruiker.home');
        }

        return redirect()->route('gebruiker.login');
    }
}
