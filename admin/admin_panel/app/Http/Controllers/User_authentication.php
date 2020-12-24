<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Redirect;
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
        if (auth()->check())
        {
            return redirect('/adminpanel');
        }
        else
        {
            return view('adminpages.login');
        }
        
    }

    public function login(Request $request)
    {

        {
            // $email = $request->input('Email');
            // $password = $request->input('Password');
            // // $remember_token = true;

            $email = $request->input('Email');
            $password = $request->input('Password');
            $remember_me = $request->input('remember_me');
            // dd(isset($remember_me));
            if(isset($remember_me))
            {   
                echo('true');
                $remember_token = true;
            }
            else 
            {
                echo('false');
                $remember_token = false;
            }
           

            // // $remember_me  = $request->has('remember_me'); 
            // // // $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
            // // dd($remember_me);

            if(Auth::attempt(['email'=>$email,'password'=>$password],$remember_token))
            {
                return redirect('/adminpanel');
            }
            else
            {
                return redirect()->back()->with('alert','Login Details Not Found. Please Signup First');
            }
            
        }

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}


