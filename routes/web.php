<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSide\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

// START HAMZA

Route::get('/admin-dash', [MainController::class, 'adminDash'])->name('adminDash');
// END HAMZA


// START NAWFAL



// END NAWFAL


// START IMAD


// END IMAD