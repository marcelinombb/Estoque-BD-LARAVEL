<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginController extends Controller
{
    public function login(){
       
       if (Auth::attempt(['email' => $_POST['email'], 'password' => $_POST['password']])) {
           return view('home');
       }else{
           return view('auth.login')->with('suamae','Login ou senha incorretos');
       }
    }
}
