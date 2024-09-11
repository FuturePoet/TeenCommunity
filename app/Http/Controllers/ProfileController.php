<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    // Show default profile edit page for a user
    public function edit()
    {
        return view('profile.edit');
    }
    // Update user profile
    
    public function update(Request $request)
    {
        // Validation logic
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // Additional validation rules
        ]);

        // Update user profile logic
        $user = auth()->user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update other fields as necessary
        $user->save();

        return view('profile.edit');
    }
   

    // Additional methods for handling admin and parent-specific updates can be added here
}
