<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review; // Ensure you have a Review model

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // Validate and store the review
        $request->validate([
            'content' => 'required|string',
        ]);

        $review = new Review();
        $review->content = $request->input('content');
        $review->user_id = auth()->id();
        $review->save();

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    // CourseController.php
public function index() {
    $reviews = Review::all();
    return view('admin.dashboard', compact('reviews'));
}

public function destroy($id) {
    Review::findOrFail($id)->delete();
    return redirect()->route('reviews.index')->with('success', 'review deleted successfully.');
}

}
