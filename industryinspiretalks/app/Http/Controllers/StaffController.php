<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class StaffController extends Controller
{
    // Get staff details list

    public function staff_details()
    {
        $staff = DB::table('staff')->distinct()->get();

        return view('admin.pages.staff.list', compact('staff'));
    }


    // Get Add New Staff Page 
    public function staff_add_page()
    {
        return view('admin.pages.staff.add');
    }  



    // Add New Staff 

    public function add_staff(Request $request)
    {   

        // DB::insert('insert into staff(name,designation,contact,email,dob,social_links,nationality,address,image_ext,date_of_joining,date_of_leaving) values(?,?,?,?,?,?,?,?,?,?,?)' , [$name,$designation,$contact,$email,$dob,$social_links,$nationality,$address,$image,$date_of_joining,$date_of_leaving]);

        if(DB::table('staff')->insert($request->only(['name', 'designation', 'contact', 'email','dob','social_links','nationality','address','date_of_joining','date_of_leaving'])))
        
        {
            return redirect()->back()->with('alert','Sucessfully Registered');
        }
        
        else
        {
            return redirect()->back()->with('alert','Error !!! Try Again Later');
        }    
        
        
    }

    // Get Staff Edit Page

    public function staff_edit_page($id)
    {
        $staff = DB::table('staff')->where('id', $id)->distinct()->first();

        return view('admin.pages.staff.edit', compact('staff'));
    } 

    // Edit staff details

    public function edit_staff(Request $request,$id)
    {
    
        switch ($request->input('action')) {
            case 'image_upload':
                $request->validate([
                    'image_ext' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]); 
        
                $imageExtension = $request->image_ext->extension(); 
                $request->image_ext->move(public_path('uploads/staff'), $id.$imageExtension);
        
                DB::table('staff')
                ->where('id', $id)
                ->update(['image_ext'=>$imageExtension]);
        
                break;
    
            case 'update':
                DB::table('staff')
                ->where('id', $id)
                ->update($request->only(['name', 'designation', 'contact', 'email','dob','social_links','nationality','address','date_of_joining','date_of_leaving']));
                
                break;
    
           
        }

            
        $tablerow = DB::table('staff')->where('id', $id)->distinct()->first();

        return view('admin.pages.staff.edit', compact('tablerow'));
    }
    
    

}
