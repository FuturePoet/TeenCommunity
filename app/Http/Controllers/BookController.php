<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
   // CourseController.php
public function index() {
    $books = Book::all();
    return view('admin.dashboard', compact('books'));
}

public function destroy($id) {
    Book::findOrFail($id)->delete();
    return redirect()->route('books.index')->with('success', 'book deleted successfully.');
}

}
