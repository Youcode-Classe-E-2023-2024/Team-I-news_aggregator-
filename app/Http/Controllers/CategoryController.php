<?php

namespace App\Http\Controllers;

use App\Models\AdminSide\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        
        $categories = Category::paginate(6);
        
        
        return view('UserSide.categories', compact('categories'));
    }
}
