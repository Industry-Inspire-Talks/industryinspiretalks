<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InspireStoriesController extends Controller
{



    public function add_inspire_stories(Request $request)
    {
        $leader_id = $request->input('leader_id');
        $link = $request->input('link');

        DB::table('inspire_stories')->insert($request->only('link','leader_id'));
    }




    public function edit_inspire_stories(Request $request)
    {
        $leader_name = $request->input('name');
       
        $leader_id = DB::table('industry_leaders')->select('id')->where('name',$leader_name)->first();
        
        switch ($request->input('action')) {
            case 'image_upload':
                $request->validate([
                    'image_ext' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]); 
        
                $imageExtension = $request->image_ext->extension(); 
                $request->image_ext->move(public_path('uploads/inspire_stories'), $leader_id->id.'.'.$imageExtension);
        
                DB::table('inspire_stories')
                ->where('leader_id', $leader_id->id)
                ->update(['image_ext'=>$imageExtension]);
        
                break;
    
            case 'update':
            
                
                DB::table('inspire_stories')
                ->where('leader_id',$leader_id->id)
                ->update($request->only('link','visible'));
                
                break;
        }

        $tablerow = DB::table('inspire_stories')->where('id', $leader_id->id)->distinct()->first();

        return view('admin.pages.inspire_stories.edit', compact('tablerow'));


    }
}
