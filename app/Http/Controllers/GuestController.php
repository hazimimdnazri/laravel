<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function home(){
        if(auth()->user()){
            return redirect('dashboard');
        }
    }

    public function showLogin(){
        return view('guest.login');
    }

    public function submitLogin(Request $request){
        if(auth()->attempt($request->only('email', 'password'))){
            return redirect('/');
        }
        return redirect()->back()->with('error', 'Invalid credentials');    
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}
