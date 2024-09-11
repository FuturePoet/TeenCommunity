<?php
namespace App\Http\Controllers;  

use App\Models\Course; // Ensure you have a Course model  
use Illuminate\Http\Request;  

class CourseController extends Controller  
{  
   

    public function create()  
    {  
        return view('courses.create'); // Show form for creating a new course  
    }  

    public function store(Request $request)  
    {  
        $request->validate([  
            'title' => 'required|string|max:255',  
            'description' => 'required|string',  
        ]);  

        Course::create($request->all()); // Store the new course  

        return redirect()->route('courses.index')->with('status', 'Course created successfully!');  
    }  

    public function show($id)  
    {  
        $course = Course::findOrFail($id); // Retrieve the course by ID  
        return view('courses.show', compact('course')); // Show the course details  
    }  
 
    // CourseController.php
public function index() {
    $courses = Course::all();
    return view('admin.dashboard', compact('courses'));
}

public function destroy($id) {
    Course::findOrFail($id)->delete();
    return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
}

}