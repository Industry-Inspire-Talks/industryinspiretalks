<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CommunityController extends Controller
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

        switch ($request->input('action')) {
            case 'image_upload':
                $request->validate([
                    'profile_image_ext' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]); 
        
                $imageExtension = $request->profile_image_ext->extension(); 
                $request->profile_image_ext->move(public_path('uploads/community'), $id.$imageExtension);
        
                DB::table('community')
                ->where('id', $id)
                ->update(['profile_image_ext'=>$imageExtension]);
        
                break;
    
            case 'update':
                DB::table('community')
                ->where('id', $id)
                ->update($request->only(['name', 'company', 'role', 'industry']));

                break;
    
           
        }

 
         $community = DB::table('community')->where('id', $id)->distinct()->first();
 
         return view('pages.community.edit', compact('community'));
     }
     

}
