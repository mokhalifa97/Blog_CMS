<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');

    Route::get('/admin', function () {
        return view('dashboard.admin');
    })->name('admin');
    
    Route::get('/charts', function () {
        return view('dashboard.charts');
    })->name('admin.charts');

    Route::get('/posts', function () {
        return view('dashboard.posts');
    })->name('admin.posts');

    Route::get('/users', function () {
        return view('dashboard.users');
    })->name('admin.users');
});

// Define route for 404 page
Route::fallback(function () {
    return view('errors.404');
});

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginUser',[AuthController::class,'loginUser'])->name('login.user');

Route::get('/signup',[AuthController::class,'signup'])->name('signup');
Route::post('/registration',[AuthController::class,'registration'])->name('registration');


Route::get('/auth/google',[SocialiteController::class,'RedirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback',[SocialiteController::class,'HandleGoogleCallback'])->name('google.callback');


Route::get('/', function () {
    return view('website.index');
})->name('index');

Route::get('/home', function () {
    return view('website.home');
})->name('home');

Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');

Route::get('/service', function () {
    return view('website.service');
})->name('service');

Route::get('/blog', function () {
    return view('website.blog');
})->name('blog');

Route::get('/about', function () {
    return view('website.about');
})->name('about');

Route::get('/faq', function () {
    return view('website.faq');
})->name('faq');

Route::get('/pricing', function () {
    return view('website.pricing');
})->name('pricing');







