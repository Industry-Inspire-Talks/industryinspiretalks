<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class User_authentication extends Controller
{

    public function getRegister(){
        return view('adminpages.register');
    }

    public function register(Request $request)
    {
        $fName = $request->input('FirstName');
        $lName = $request->input('LastName');
        $email = $request->input('Email');
        // $password1 = $request->input('Password');
        // $password2 = $request->input('Repeat Password');

        if($request->input('Password')==$request->input('RepeatPassword'))
        {
            $password   =   PASSWORD_HASH($request->input('Password'),PASSWORD_BCRYPT);

            if(User::create(['first_name'=>$fName,'last_name'=>$lName,'email'=>$email,'password'=>$password ,'user_type'=>'admin' ]))
            {
                return redirect()->back()->with('alert','Sucessfully Registered.Now Please Login To Continue');
            }
            else{
                return redirect()->back()->with('alert','Registration Failed.Please Register Again');
            }
        }

        else{
            return redirect()->back()->with('alert','Password Incorrect');
        }
    

    }


    public function getLogin()
    {
         return view('adminpages.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('Email');
        $password = $request->input('Password');

        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return redirect('/adminpanel');
        }
        else{
            return redirect()->back()->with('alert','Login Details Not Found. Please Signup First');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}


