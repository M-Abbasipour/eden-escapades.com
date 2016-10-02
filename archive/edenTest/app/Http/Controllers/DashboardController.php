<?php

namespace eden\Http\Controllers;

use Auth;
use eden\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    public function getDashboard()
    {
        return view('dashboard.index');
    }
    
}