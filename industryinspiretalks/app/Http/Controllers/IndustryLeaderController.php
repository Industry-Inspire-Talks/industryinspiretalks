<?php

namespace App\Http\Controllers;

use App\Models\IndustryLeader;
use Illuminate\Http\Request;

class IndustryLeaderController extends Controller
{
    public function insert(Request $request)
    {

        $industry_leader = new IndustryLeader();
        $industry_leader->fill($request->input());
        $industry_leader->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, IndustryLeader $industry_leader)
    {
        $industry_leader->fill($request->input());
        $industry_leader->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(IndustryLeader $industry_leader)
    {
        $industry_leader->delete();

        return redirect('/industry_leaders')->with('alert', 'Deleted Successfully');
    }

}
