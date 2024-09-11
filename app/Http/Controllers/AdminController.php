<?php
// In App\Http\Controllers\AdminController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Event;
use App\Models\Book;
use App\Models\Review;
class AdminController extends Controller

{
    
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showReports()
    {
        return view('admin.reports');
    }

    public function submitReport(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Process the report submission

        return redirect()->route('admin.reports')->with('success', 'Report submitted successfully!');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function help()
    {
        return view('admin.help');
    }

   
    public function __construct()
{
    $this->middleware('auth:admin'); // Ensure this middleware is used for admin routes

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
    public function showAdmins()
    {
        $admins = User::where('role', 'admin')->get();
        return view('users.admin', compact('admins'));
    }
   public function dashboard()
{
    // Fetch all data from the respective models
    $courses = Course::all();
    $events = Event::all();
    $books = Book::all();
    $reviews = Review::all();

    // Pass the data to the view
    return view('admin.dashboard', compact('courses', 'events', 'books', 'reviews'));
}

}