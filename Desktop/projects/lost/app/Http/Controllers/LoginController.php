<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {


            return redirect()->route('login')->withSuccess('You have successfully registered & logged in!');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }


    function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->route('product')->with('success', 'User logged in');
    }

    return back()->withErrors([
        'name' => 'Your provided credentials do not match our records.',
    ])->withInput(['name' => $request->input('name')]);
}
function logout(){

    Auth::logout(); // Log out the user
    Session::flush(); // Clear all session data

    return redirect()->route('welcome')->with('success', 'User logged out successfully');
}
}
