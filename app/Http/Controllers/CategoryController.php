<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; // Assume you have a Category model

class CategoryController extends Controller
{
    public function index()
    {
        // Fetch categories from the database
        $categories = Category::all();
        
        // Pass categories to the view
        return view('UserSide.categories', compact('categories'));
    }
}
