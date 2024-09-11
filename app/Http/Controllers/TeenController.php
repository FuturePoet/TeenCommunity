<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeenController extends Controller
{
    public function index()
    {
        return view('home');  // Home page for teens
    }
}