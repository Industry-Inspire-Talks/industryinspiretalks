<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function list($tablename)
    {
        $tablerow = DB::table($tablename)->distinct()->get();
        
        return view("pages.".$tablename.".list", compact('tablerow'));
    }


    public function add(Request $request, $tablename){

       $columnname =  DB::getSchemaBuilder()->getColumnListing($tablename);
        // dd($columnname);

        // ['name', 'designation', 'contact', 'email','dob','social_links','nationality','address','date_of_joining','date_of_leaving']
        if(DB::table($tablename)->insert($request->only($columnname)))
        
        {
            return redirect()->back()->with('alert','Sucessfully Registered');
        }
        
        else
        {
            return redirect()->back()->with('alert','Error !!! Try Again Later');
        }    
    }
}
