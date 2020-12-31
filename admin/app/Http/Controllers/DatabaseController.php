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
    
        $values = array('name'=> $request->input('name'), 'designation'=>$request->input('designation'), 'contact'=>$request->input('contact'),
                        'email'=>$request->input('email'), 'dob'=>$request->input('dob'), 'social_links'=>'', 'nationality'=>$request->input('nationality'), 'address'=>$request->input('address'),
                        'profile_image_ext'=>'','date_of_joining'=>$request->input('date_of_joining') , 'date_of_leaving'=>$request->input('date_of_leaving')
        );

        if(DB::table('staff')->insert($values))
        
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
