<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogout() 

    {
    auth()->logout();

    return redirect()->route('index');
	}
}
