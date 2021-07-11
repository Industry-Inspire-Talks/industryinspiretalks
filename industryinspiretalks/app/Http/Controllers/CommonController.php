<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    // get add page
    public function get_add_page($tablename)
    {
        return view('admin.pages.'.$tablename.'.add');
    }  
    
    // get list page
    public function list($tablename)
    {
        $tablerow = DB::table($tablename)->distinct()->get();
        
        return view("admin.pages.".$tablename.".list", compact('tablerow'));
    }

    // add new member
    public function add(Request $request, $tablename){

       $col1 =  DB::getSchemaBuilder()->getColumnListing($tablename);
       $col2 = ['image_ext'];

       $columnname = array_diff($col1,$col2);
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

    // get edit page
    public function edit_page($tablename,$id)
    {
        $tablerow = DB::table($tablename)->where('id', $id)->distinct()->first();

        return view('admin.pages.'.$tablename.'.edit', compact('tablerow'));
    } 

    // edit member

    public function edit(Request $request,$tablename,$id)
    {
    
        if(Schema::hasColumn($tablename,'image_ext'))
        {

            switch ($request->input('action')) {
                case 'image_upload':
                    $request->validate([
                        'image_ext' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    ]); 
            
                    $imageExtension = $request->image_ext->extension(); 
                    $request->image_ext->move(public_path('uploads/'.$tablename), $id.'.'.$imageExtension);
            
                    DB::table($tablename)
                    ->where('id', $id)
                    ->update(['image_ext'=>$imageExtension]);
            
                    break;
        
                case 'update':
                
                    $col1 =  DB::getSchemaBuilder()->getColumnListing($tablename);
                    $col2 = ['image_ext'];
    
                    $columnname = array_diff($col1,$col2);
                    DB::table($tablename)
                    ->where('id',$id)
                    ->update($request->only($columnname));
                    
                    break;
                
               
            }
    
        }

        else
        {
            $columnname =  DB::getSchemaBuilder()->getColumnListing($tablename);
            DB::table($tablename)
                    ->where('id',$id)
                    ->update($request->only($columnname));
        }

            
        $tablerow = DB::table($tablename)->where('id', $id)->distinct()->first();

       

        return view('admin.pages.'.$tablename.'.edit', compact('tablerow'));
    }
}
