<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function insert(Request $request)
    {

        $career = new Career();
        $career->fill($request->input());
        $career->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Career $career)
    {

        $career->fill($request->input());
        $career->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Career $career)
    {
        $career->delete();

        return redirect('/careers')->with('alert', 'Deleted Successfully');
    }

}
