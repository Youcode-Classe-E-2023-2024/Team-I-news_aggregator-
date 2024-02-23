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
/** hover show */
function hover_show($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'hover show' : '';
    }
    return Request::path() == $route ? 'hover show' : '';
}

/** for side bar menu active */
function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', function () {
        return view('home');
    });
    Route::get('home', function () {
        return view('home');
    });
});

Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // ----------------------------login ------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login/push', 'authenticate')->name('login/push');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('change/password', 'changePassword')->name('change/password');
    });

    // ------------------------ register sccount ----------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register/form', 'index')->name('register/form');
        Route::post('register/save', 'saveRecord')->name('register/save');
    });

    // -------------------------- forgot password ---------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('/forgot/password', 'sendEmail')->name('forgot/password');
        Route::post('post/email', 'postEmail')->name('post/email');
    });

    // ------------------------- reset password -----------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset/password/{token}', 'getPassword');
        Route::post('reset/password', 'updatePassword')->name('reset/password');
    });

    // ------------------------ confirm password -----------------------//
    Route::controller(ConfirmPasswordController::class)->group(function () {
        Route::get('confirm/password', 'confirmPassword')->name('confirm/password');
    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // -------------------------- main dashboard ----------------------//
    Route::controller(HomeController::class)->group(function () {
        Route::get('/home', 'index')->middleware('auth')->name('home');
    });

    // ------------------------- User Management ----------------------//
    Route::controller(UserManagementController::class)->group(function () {
        Route::get('users/list/page', 'index')->middleware('auth')->name('users/list/page');
        Route::get('users/view/{user_id}', 'userView')->middleware('auth');
    });
});


// END NAWFAL


// START IMAD
Route::get('/homeuser', function () {
    return view('UserSide.home');
})->name('homeuser');

Route::get('/homebody', function () {
    return view('UserSide.homebody');
})->name('homebody');


// END IMAD
