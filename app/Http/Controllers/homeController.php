<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class homeController extends Controller
{
    public function create()
    {
    	return view('index');
    }


    public function registerUser(Request $request)
    {
		$user = new User;
    	$user->name = $request->input('fullname');
    	$user->email = $request->input('email');
    	$user->password = Hash::make($request->input('password'));
    	$user->save();
    	return view('dashboard');
    }

    
    public function loginUser(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return view('dashboard');
        }      
        else
        {   
            echo '<script language = "javascript">';
            echo 'alert("You must login first")';
            echo '</script>';

            return view('index');
        }
    }
}
