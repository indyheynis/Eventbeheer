<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function home()
    {
        return view('events.home');
    }
    public function index()
    {
        $events = Evenement::all();
        return view('events.index', compact('events'));
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'ticket_count' => 'required',
            'description' => 'required',
        ]);
        Evenement::create($request->all());
        return redirect()->route('events.index');
    }
    public function edit($id)
    {
        $event = Evenement::findOrFail($id);
        return view('events.edit', compact('event'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'ticket_count' => 'required',
            'description' => 'required',
        ]);
        $event = Evenement::find($id);
        $event->update($request->all());
        return redirect()->route('events.index');
    }
    public function delete($id)
    {
        Evenement::find($id)->delete();
        return redirect()->route('events.index');
    }
}
