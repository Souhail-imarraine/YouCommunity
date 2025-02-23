<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('date_heure', 'desc')->get();
        return view('events', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $CreateEvents)
    {
        // dd($CreateEvents->all());
        $dataEvent = $CreateEvents->validate([
            'titre' => 'required|string|max:100',
            'adresse' => 'required|string|max:250',
            'date_heure' => 'required|date',
            'categorie' => 'required|string|in:sport,musique,education',            
            'max_participants' => 'required|integer|min:1|max:150',
            'description' => 'required|string|max:500|regex:/^[a-zA-ZÀ-ÿ0-9\s.,!?()-]+$/',
        ]);
    
        $dataEvent['user_id'] = auth()->id();
    
        // Create the event with the user_id
        Event::create($dataEvent);
        
        return redirect()->route('events.index')->with('success', 'Event created successfully.');

    }

    public function update(Request $request, Event $event)
{
    $validatedData = $request->validate([
        'titre' => 'required|string|max:100',
        'adresse' => 'required|string|max:250',
        'date_heure' => 'required|date',
        'categorie' => 'required|string|in:sport,musique,education',            
        'max_participants' => 'required|integer|min:1|max:150',
        'description' => 'required|string|max:500|regex:/^[a-zA-ZÀ-ÿ0-9\s.,!?()-]+$/',
    ]);
    // dd($event->all());

    $event->update($validatedData);
    return redirect()->route('events.index')->with('success', 'Event updated successfully');
}
}