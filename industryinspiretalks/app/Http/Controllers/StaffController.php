<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StaffController extends Controller
{

    public function insert(Request $request)
    {

        $staff = new Staff();
        $staff->fill($request->input());
        $staff->save();

        return redirect()->back()->with('alert', 'Sucessfully Registered');
    }

    public function update(Request $request, Staff $staff)
    {

        $staff->fill($request->input());
        $staff->save();

        return redirect()->back()->with('alert', 'Updated Successfully');
    }

    public function delete(Staff $staff)
    {
        $staff->delete();

        return redirect('/staff')->with('alert', 'Deleted Successfully');
    }
}
