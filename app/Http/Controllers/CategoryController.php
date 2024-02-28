<?php

namespace App\Http\Controllers;

use App\Models\AdminSide\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('UserSide.categories', compact('categories'));
    }
}
