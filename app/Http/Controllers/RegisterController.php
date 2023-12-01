<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('home/auth/register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:3|max:255',
            'confirm_password' => 'required|same:password'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Berhasil mendaftar');
    }
}
