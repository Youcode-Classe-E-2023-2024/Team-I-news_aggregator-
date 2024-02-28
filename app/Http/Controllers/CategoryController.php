<?php

namespace App\Http\Controllers;

use App\Models\AdminSide\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {



        return view('UserSide.categories');
    }
}
