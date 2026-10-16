<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return Event::all();
    }

    public function show(string $id){
        return Event::find($id);
    }

    public function store(Request $request){
        return Event::create($request->all());
    }

    public function update(Request $request, string $id){
        $event = Event::find($id);
        $event->update($request->all());
        return $event;
    }

    public function destroy(string $id){
        $event = Event::find($id);
        $event->delete();
        return $event;
    }
}
