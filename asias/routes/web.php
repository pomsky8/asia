<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome.html', function () {
    return view('welcome');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/product.html', function () {
    return view('product');
});

Route::get('/moneybouqet.html', function () {
    return view('moneybouqet');
});

Route::get('/chocolatebouqet.html', function () {
    return view('chocolatebouqet');
});

Route::get('/chocolate.html', function () {
    return view('chocolate');
});

Route::get('/snacks.html', function () {
    return view('snacks');
});

Route::get('/viands.html', function () {
    return view('viands');
});

Route::get('/drinks.html', function () {
    return view('drinks');
});

Route::get('/alcohol.html', function () {
    return view('alcohol');
});

Route::get('/reviews.html', function () {
    return view('reviews');
});