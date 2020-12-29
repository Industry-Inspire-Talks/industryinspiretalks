<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class DatabaseController extends Controller
{
    public function community_details(){
        $community = DB::table('community')->distinct()->get();

        return view('pages.community.list',compact('community'));
        
    }


    public function staff_details(){
        $staff = DB::table('staff')->distinct()->get();

        return view('pages.staff.list',compact('staff'));
        
    }
}
