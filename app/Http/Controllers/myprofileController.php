<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class myprofileController extends Controller
{
    public function create()
    {
    	return view('about');
    }
}
