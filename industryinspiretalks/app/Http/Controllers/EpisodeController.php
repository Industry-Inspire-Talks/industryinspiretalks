<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodeController extends Controller
{
    public function insert(Request $request)
    {

        $episode = new Episode();
        $episode->fill($request->input());
        $episode->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Episode $episode)
    {
        $episode->fill($request->input());
        $episode->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Episode $episode)
    {
        $episode->delete();

        return redirect('/episodes')->with('alert', 'Deleted Successfully');
    }
}


