<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() 
    {
        $events = Event::query()->get();
        return view('index', ['events' => $events]);
    }

    public function all() 
    {
        $events = Event::query()->get();
        return view('events', ['events' => $events]);
    }

    public function details($id)
    {
        $event = Event::query()->findOrFail($id);
        return view('eventsdetails', ['event' => $event]);
    }


    public function addEventForm()
    {
        return view('Event.add-Event'); 
    }

    public function storeEvent(Request $request)
    {
        Event::query()->create($request->all());
        return redirect('/'); 
    }

    
    public function edit($id)
    {
        $event = Event::query()->findOrFail($id);
        return view('Event.edit', ['Event' => $event]);
    }


    public function update(Request $request, $id)
    {
        if(!$request->password){
            unset($request['password']);
        }

        $event = Event::query()->findOrFail($id);
        $event->update($request->all());

        return back();

    }

    public function destroy($id)
    {
        $event = Event::query()->findOrFail($id);

        $event->delete();

        return back();
    }


}

