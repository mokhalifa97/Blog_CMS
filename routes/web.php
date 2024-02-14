<?php

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

Route::get('/admin', function () {
    return view('dashboard.admin');
})->name('admin');

Route::get('/charts', function () {
    return view('dashboard.charts');
})->name('admin.charts');





