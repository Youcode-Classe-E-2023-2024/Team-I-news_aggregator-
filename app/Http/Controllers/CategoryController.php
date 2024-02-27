<?php

namespace App\Http\Controllers;

use App\Models\AdminSide\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        
        $categories = Category::whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('rss_items')
                  ->whereRaw('rss_items.category = categories.name');
        })->paginate(6);
        
        return view('UserSide.categories', compact('categories'));
    }
}
