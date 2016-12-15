<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LogInValidation;

use Illuminate\Support\Facades\Auth;

use App\ModelLogIn;

class ProfileController extends Controller
{
    public function Login(){

    	return view('view_Login');

    }
    public function processLogin(LogInValidation $request){

        $userInput = array(
            'UN' => $request->input('username'),
            'PW' => $request->input('password')
        );

        $result = ModelLogIn::checkLogIn($userInput);

        if($result== false)
        {  
            //======================================Login Failed
            $request->session()->flash('message', 'Log In Failed');
            return redirect('/');
        }
        else
        {
            //======================================Login Success
            $request->session()->flash('message', 'You Logged In Successfully');
            return redirect('home');
        }

    }
}
