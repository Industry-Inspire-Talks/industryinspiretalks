<?php

namespace App\Http\Controllers;

use App\Models\InspireStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspireStoriesController extends Controller
{
    public function insert(Request $request)
    {

        $inspire_stories = new InspireStory();
        $inspire_stories->fill($request->input());
        $inspire_stories->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, InspireStory $inspire_story)
    {
        $inspire_story->fill($request->input());
        $inspire_story->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(InspireStory $inspire_story)
    {
        $inspire_story->delete();

        return redirect('/inspire_stories')->with('alert', 'Deleted Successfully');
    }

    
}
