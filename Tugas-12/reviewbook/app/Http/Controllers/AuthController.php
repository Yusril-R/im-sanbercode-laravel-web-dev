<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginShow(){
        return view('auth.login');
    }

    public function loginUser(Request $request){

        $credentials = $request->validate([
            'name' => 'required|string|max:255|min:4',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'berhasil login!');
        }

        return back()->withErrors(['name' => 'Invalid username', 'password' => 'Invalid password']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'berhasil logout!');
    }

    public function registerShow(){
        return view('auth.register');
    }

    public function userRegister(Request $request){
        $request->validate([
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8|confirmed',
        ]);

        $UserCount = User::count();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $UserCount === 0 ? 'admin' : 'user'
        ]);

        return redirect('/')->with('success', 'berhasil register!');
    }


}
