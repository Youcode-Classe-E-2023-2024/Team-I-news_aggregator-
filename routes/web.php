<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSide\MainController;
use App\Http\Controllers\AdminSide\PromptController;

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
Route::post('/rss.store', [PromptController::class, 'trait_rss'])->name('rss.store');
Route::get('/admin/rss-items-static', [PromptController::class, 'showRssItemsStatic'])->name('admin.rss.items.static');
Route::get('/rss-item-details/{id}', [PromptController::class, 'rssItemDetails'])->name('rss.item.details');


// END HAMZA


// START NAWFAL



// END NAWFAL


// START IMAD
Route::get('/homeuser', function () {
    return view('UserSide.home');
})->name('homeuser');

Route::get('/homebody', function () {
    return view('UserSide.homebody');
})->name('homebody');


// END IMAD
