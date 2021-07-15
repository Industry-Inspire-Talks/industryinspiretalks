<?php

namespace App\Http\Controllers;

use App\Models\InspireClass;
use Illuminate\Http\Request;

class InspireClassController extends Controller
{
    public function insert(Request $request)
    {

        $inspire_class = new InspireClass();
        $inspire_class->fill($request->input());
        $inspire_class->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, InspireClass $inspire_class)
    {
        $inspire_class->fill($request->input());
        $inspire_class->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(InspireClass $inspire_class)
    {
        $inspire_class->delete();

        return redirect('/inspire_classes')->with('alert', 'Deleted Successfully');
    }
}
