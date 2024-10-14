<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::with('artist')->get();
        return view('admin.events.index',[
            'events' => $events
        ]);
    }

    public function create(){
        $artist = auth()->user()->artist;
        return view('admin.events.create',[
            'artist' => $artist
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'artist_id' => 'required|exists:users,id',
        ]);

        Event::create($validated);
        return redirect()->route('admin.events.index')->with('success', 'Event created successfully');
    }

    public function edit(Event $event){
        return view('admin.events.edit',[
            'event' => $event
        ]);
    }

    public function update(Request $request, Event $event){
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'date' => 'required|date',
            'artist_id' => 'required|exists:users,id',
        ]);

        $event->update($validated);
        return redirect()->route('admin.events.index')->with('success', 'Event updated successfully');
    }

    public function destroy(Event $event){
        $event->delete();
        return redirect()->route('admin.events.index')->with('success', 'Event deleted successfully');
    }
}
