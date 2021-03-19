<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
        $events=Event::all();
        return view("pages.home")->with("events",$events);
    }

    public function create()
    {
        return view('pages.add');
    }

    public function store(Request $req)
    {
        $event=new Event;
        $event->event_name = $req->event_name;
        $event->event_date = $req->event_date;
        $event->event_venue = $req->event_venue;        
        $event->event_in_charge = $req->event_charge;
        $event->save();
        $event=new Event;

        return redirect()->route('events.index');
    }

    public function show($id)
    {
        $event=Event::find($id);
        return view('pages.event')->with("event",$event);
    }


    public function edit($id)
    {
        $event=Event::find($id);
        return view('pages.edit')->with("event",$event);
    }

    public function update(Request $req, $id)
    {
        $event=Event::find($id);
        $event->event_name = $req->event_name;
        $event->event_date = $req->event_date;
        $event->event_venue = $req->event_venue;
        $event->event_in_charge = $req->event_charge;
        $event->save(); 

        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $event=Event::destroy($id);
        return redirect()->route('events.index');   
    }
}
