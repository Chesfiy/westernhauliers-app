<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            if($user->user_type === 'user'){
                return view('dashboard');
            } else if($user->user_type === 'admin'){
                return view('admin.dashboard');
            }
        } 
    }
}
