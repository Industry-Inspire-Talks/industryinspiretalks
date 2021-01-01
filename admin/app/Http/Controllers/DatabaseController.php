<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;



class DatabaseController extends Controller
{
    // Get community details list

    public function community_details()
    {
        $community = DB::table('community')->distinct()->get();

        return view('pages.community.list', compact('community'));
    }


    // Get Add New Community Page 
    public function community_add_page()
    {
        return view('pages.community.add');
    }  

     // Add New Community

     public function add_community(Request $request)
     {   
     
 
         if(DB::table('community')->insert($request->only(['name', 'company', 'role', 'industry'])))
         
         {
             return redirect()->back()->with('alert','Sucessfully Registered');
         }
         
         else
         {
             return redirect()->back()->with('alert','Error !!! Try Again Later');
         }    
         
         
     }


         // Get Community Edit Page

    public function community_edit_page($id)
    {
        $community = DB::table('community')->where('id', $id)->distinct()->first();

        return view('pages.community.edit', compact('community'));
    } 


     // Edit community details

     public function edit_community(Request $request,$id)
     {
          DB::table('community')
         ->where('id', $id)
         ->update($request->only(['name', 'company', 'role', 'industry']));
 
         $community = DB::table('community')->where('id', $id)->distinct()->first();
 
         return view('pages.community.edit', compact('community'));
     }
     




    // Get staff details list

    public function staff_details()
    {
        $staff = DB::table('staff')->distinct()->get();

        return view('pages.staff.list', compact('staff'));
    }


    // Get Add New Staff Page 
    public function staff_add_page()
    {
        return view('pages.staff.add');
    }  



    // Add New Staff 

    public function add_staff(Request $request)
    {   
    

        if(DB::table('staff')->insert($request->only(['name', 'designation', 'contact', 'email','dob','social_links','nationality','address','profile_image_ext','date_of_joining','date_of_leaving'])))
        
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

        return view('pages.staff.edit', compact('staff'));
    } 

    // Edit staff details

    public function edit_staff(Request $request,$id)
    {
         DB::table('staff')
        ->where('id', $id)
        ->update($request->only(['name', 'designation', 'contact', 'email','dob','social_links','nationality','address','profile_image_ext','date_of_joining','date_of_leaving']));

        $staff = DB::table('staff')->where('id', $id)->distinct()->first();

        return view('pages.staff.edit', compact('staff'));
    }
    

    
    
}
