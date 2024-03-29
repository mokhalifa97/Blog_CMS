<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('admin');
        }
        return view('auth.login');
    }

    public function signup(){
        if(Auth::check()){
            return redirect()->route('admin');
        }
        return view('auth.register');
    }

    public function loginUser(Request $request){
        $credential=$request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential)){
            return redirect()->route('admin');
        }
        return redirect()->route('login')->with('error','login is not valid! check your credential again');
    }

    public function registration(Request $request){
        $request->validate([
            'username'=> 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user= User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if(!$user){
            return redirect()->route('registration')->with('regerror','registration is not valid !');
        }
        return redirect()->route('admin');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
