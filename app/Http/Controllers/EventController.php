<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Import your Event model if you have one

class EventController extends Controller
{
    // Show all events (Example method)
   

    // Show a specific event (Example method)
    public function show($id)
    {
        $event = Event::findOrFail($id); // Find event by id
        return view('events.show', compact('event'));
    }

// CourseController.php
public function index() {
    $events = Event::all();
    return view('admin.dashboard', compact('events'));
}

public function destroy($id) {
    Event::findOrFail($id)->delete();
    return redirect()->route('events.index')->with('success', 'events deleted successfully.');
}
}
