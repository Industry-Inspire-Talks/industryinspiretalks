<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EpisodeController extends Controller
{
    public function get_episode_edit_page($id)
    {
        $tablerow = DB::table('episodes')->where('id', $id)->distinct()->first();
        $series = DB::table('series')->distinct()->get();

        return view('admin.pages.episodes.edit', compact('tablerow','series'));
    }


    public function edit_episode($id,Request $request)
    {

        // dd($request->series_id);
        DB::table('episodes')
                ->where('id',$id)
                ->update($request->only("series_id","title","link","visible"));
        

        $tablerow = DB::table('episodes')->where('id', $id)->distinct()->first();
        $series = DB::table('series')->distinct()->get();

        return view('admin.pages.episodes.edit', compact('tablerow','series'));
    
    }
}


