<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
        return view('user.dashboard');
    }

    public function allowedUser(){
        return response()->json([
            'message' => 'You are allowed to enter this',
        ]);
    }

    public function notAllowedUser(){
        return response()->json([
            'message' => 'You are not allowed to enter this',
        ]);
    }
}
