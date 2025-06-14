<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\StudentUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Authen extends Controller
{
    //
    public function showLoginForm()
    {
        return view('Components.login'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/studs')->with('message', 'Login successful!');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {

        $users = StudentUser::all();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:table_studentusers,email',
            'age' => 'required|integer|min:1',
            'password' => 'required|string|min:6|confirmed',
        ]);

        StudentUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('message', 'Registration successful! Please log in.');
    }
}
