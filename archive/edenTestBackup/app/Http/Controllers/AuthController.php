<?php

namespace eden\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use eden\Models\User;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }
    
    public function postSignup(Request $request)
    {
        //validate data received from request
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6'
        ]);
        
        User::create([
            'email' => $request['email'],
            'username' => $request['username'],
            'password' => bcrypt($request['password']),
        ]); 
        
        return redirect()
            ->route('home')
            ->with('info', 'Your account has been created and you can now sign in!'); 
    }
    
    public function getSignin()
    {
        return view('auth.signin');
    }
    
    public function postSignin(Request $request)
    {
         //validate data received from request
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
             return redirect()
                        ->route('home')
                        ->with('info', 'Successfully signed in!');
        }
        return redirect()
                ->back()
                ->with('info', 'Could not sign you in with those credentials.');
    }
    
    public function getSignout()
    {
        Auth::logout();
        
        return redirect()->route('home');
    }
    
}