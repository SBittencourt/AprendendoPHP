<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Event;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::with('user')->get();
        return view('photos.index', compact('photos'));
    }


    public function create()
    {
        $events = Event::all();
        return view('photos.create', compact('events'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'path' => 'required',
            'description' => 'required',
            'event_id' => 'required|exists:events,id',
        ]);

        Photo::create($validated);

        return redirect()->route('photos.index');
    }

    public function edit(Photo $photo)
    {
        $events = Event::all();
        return view('photos.edit', compact('Photo', 'events'));
    }

    
    public function update(Request $request, Photo $photo)
    {
        $validated = $request->validate([
            'name' => 'required',
            'path' => 'required',
            'description' => 'required',
            'event_id' => 'required|exists:events,id',
        ]);

        $photo->update($validated);

        return redirect()->route('photos.index');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        return redirect()->route('photos.index');
    }
}