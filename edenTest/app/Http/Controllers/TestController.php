<?php

namespace eden\Http\Controllers;

use Auth;
use eden\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{    
    public function getTest()
    {
        return view('auth.test');
    }
    
}