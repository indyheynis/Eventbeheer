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

    public function dashboard()
    {
        $gebruikers = Gebruiker::all();
        return view('gebruiker.dashboard', compact('gebruikers'));
    }


    public function register()
    {
        return view('gebruiker.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
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
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $gebruiker = Gebruiker::where('email', $request->email)->first();

        if (!$gebruiker) {
            //Email not found
            return redirect()->route('gebruiker.login')->withErrors(['email' => 'Email not found']);
        }

        if ($request->password !== $gebruiker->password) {
            //Password incorrect
            return redirect()->route('gebruiker.login')->withErrors(['password' => 'Password incorrect']);
        }

        //Authentication successful
        return redirect()->route('gebruiker.dashboard');
    }

    public function edit($id)
    {
        $gebruiker = Gebruiker::find($id);
        return view('gebruiker.edit', compact('gebruiker'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        $gebruiker = Gebruiker::find($id);
        $gebruiker->name = $request->name;
        $gebruiker->email = $request->email;
        $gebruiker->password = $request->password;
        $gebruiker->role = $request->role;
        $gebruiker->save();

        return redirect()->route('gebruiker.home');
    }

    public function delete($id)
    {
        $gebruiker = Gebruiker::find($id);
        $gebruiker->delete();

        return redirect()->route('gebruiker.dashboard');
    }
}
