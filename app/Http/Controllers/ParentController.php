<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return view('parent.dashboard');
    }
    public function edit()
    {
        return view('edit');
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
