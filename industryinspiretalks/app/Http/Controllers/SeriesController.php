<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function insert(Request $request)
    {

        $series = new Series();
        $series->fill($request->input());
        $series->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Series $series)
    {
        $series->fill($request->input());
        $series->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Series $series)
    {
        $series->delete();

        return redirect('/series')->with('alert', 'Deleted Successfully');
    }
}
