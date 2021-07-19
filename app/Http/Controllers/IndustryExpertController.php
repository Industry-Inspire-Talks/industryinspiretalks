<?php

namespace App\Http\Controllers;

use App\Models\IndustryExpert;
use Illuminate\Http\Request;

class IndustryExpertController extends Controller
{
    public function insert(Request $request)
    {

        $industry_expert = new IndustryExpert();
        $industry_expert->fill($request->input());
        $industry_expert->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, IndustryExpert $industry_expert)
    {
        $industry_expert->fill($request->input());
        $industry_expert->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(IndustryExpert $industry_expert)
    {
        $industry_expert->delete();

        return redirect('/industry_experts')->with('alert', 'Deleted Successfully');
    }

}
