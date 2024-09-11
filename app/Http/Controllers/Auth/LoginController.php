<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Ensure this view exists
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            // Redirect based on user role
            if ($user->role === 'admin') {
                return view('admin'); 
            } elseif ($user->role === 'parent') {
                return view('parent'); 
            } elseif ($user->role === 'teen') {
                return view('home'); 
            } else {
                return redirect()->intended('/home'); // Default redirection
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
