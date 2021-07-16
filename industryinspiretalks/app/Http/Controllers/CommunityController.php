<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CommunityController extends Controller
{
    // Get community details list

    public function insert(Request $request)
    {

        $community = new Community();
        $community->fill($request->input());
        $community->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Community $community)
    {

        $community->fill($request->input());
        $community->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Community $community)
    {
        $community->delete();

        return redirect('/community')->with('alert', 'Deleted Successfully');
    }
}
