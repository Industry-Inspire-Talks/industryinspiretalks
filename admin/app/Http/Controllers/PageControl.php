<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControl extends Controller
{

    public function add_staff()
    {
        return view('pages.staff.add');
    }
}
