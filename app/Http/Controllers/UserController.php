<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->withErrors('Invalid credentials');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('home');
    }
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            Auth::logout(); // Log out the user after deletion
            return redirect()->route('login')->with('success', 'Account deleted successfully.');
        }

        return redirect()->route('home')->with('error', 'User not found.');
    }
    public function showTeens()
    {
        // Fetch all users with the role 'teen'
        $teens = User::where('role', 'teen')->get();

        // Return the view with the filtered users
        return view('users.teen', compact('teens'));
    }
    //------------------------------------------
    public function showAdmins()
    {
        // Fetch all users with the role 'admin'
        $admins = User::where('role', 'admin')->get();

        // Return the view with the filtered admins
        return view('users.admin', compact('admins'));
    }
    public function showParents()
    {
        // Fetch all users with the role 'parent'
        $parents = User::where('role', 'parent')->get();

        // Return the view with the filtered parents
        return view('users.parent', compact('parents'));
    }
    public function edit()
    {
        $user = auth()->user(); // Get the authenticated user
        return view('profile.edit', compact('user')); // Pass the user to the view
    }
  
   
    public function update(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(), // Ensure unique email except for the current user
        ]);
    
        // Get the authenticated user
        $user = auth()->user();
    
        // Update user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Add other fields if necessary
    
        // Save the user data
        $user->save();
    
        return view('profile.edit');
    }
  


}