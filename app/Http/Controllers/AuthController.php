<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Login success');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string|max:75',
            'email' => 'required|email:dns|unique:users',
            'phone_number' => 'required|numeric|digits_between:10,13|unique:users',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // dd($request->all());
        $credentials['password'] = bcrypt($credentials['password']);
        if ($request->hasFile('avatar')) {
            $credentials['avatar'] = $request->file('avatar')->store('avatar', 'public');
        }
        $user = User::create($credentials);
        return redirect('/login')->with('success', 'Register success', compact('user'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('success', 'Logout success');
    }
}
