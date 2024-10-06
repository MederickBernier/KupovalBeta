<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegistrationForm(){
        $page = "register";
        return view('auth.register',[
            'page' => $page,
        ]);
    }

    public function register(){

    }

    public function showLoginForm(){
        $page = "login";
        return view('auth.login',[
            'page' => $page,
        ]);
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => true])){
            return redirect()->intended(route('index'));
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials or account inactive'])->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
