<?php

namespace App\Http\Controllers\AdminSide;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function adminDash() {
        return view('AdminSide.main');
    }
}
