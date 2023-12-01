<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('home.auth.login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/informasi');
            } else if (Auth::user()->role == 'user') {
                return redirect()->intended('/home');
            }
        }

        return redirect()->back()->withInput($request->only('username', 'password'))->with('error', 'Username atau password salah');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
