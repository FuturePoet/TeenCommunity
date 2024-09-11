<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit()
    {
        return view('edit');
    }
    public function adminEdit()
    {
        // Implement the logic for admin editing
        return view('profile.adminEdit'); // Ensure this view exists
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
