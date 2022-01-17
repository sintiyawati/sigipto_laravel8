<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    function login(){
        return view('admin.login');
    }

    function loginProcess(User $user){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('admin/')->with('success','Selamat datang');
        }else{
            return back()->with('danger', 'Akun Tidak Temukan');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }

    function forgotPassword(){
        
    }

}