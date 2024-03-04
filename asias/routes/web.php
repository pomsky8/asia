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

Route::get('/welcome.blade.php', function () {
    return view('welcome');
});

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/product.blade.php', function () {
    return view('product');
});

Route::get('/moneybouqet.blade.php', function () {
    return view('moneybouqet');
});

Route::get('/chocolatebouqet.blade.php', function () {
    return view('chocolatebouqet');
});

Route::get('/chocolate.blade.php', function () {
    return view('chocolate');
});

Route::get('/snacks.blade.php', function () {
    return view('snacks');
});

Route::get('/viands.blade.php', function () {
    return view('viands');
});

Route::get('/drinks.blade.php', function () {
    return view('drinks');
});

Route::get('/alcohol.blade.php', function () {
    return view('alcohol');
});

Route::get('/reviews.blade.php', function () {
    return view('reviews');
});