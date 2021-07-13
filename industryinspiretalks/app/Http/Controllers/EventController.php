<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function insert(Request $request)
    {

        $event = new Event();
        $event->fill($request->input());
        $event->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Event $event)
    {
        $event->fill($request->input());
        $event->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Event $event)
    {
        $event->delete();

        return redirect('/events')->with('alert', 'Deleted Successfully');
    }
}
