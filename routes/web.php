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

Route::get('/', function () {
    $pageName="Home";
    return view('home')->with('pageName',$pageName);
})->name('home');
Route::get('about', function () {
    $pageName="About";
    return view('about')->with('pageName',$pageName);
})->name('about');
Route::get('products', function () {
    $pageName="Products";
    return view('products')->with('pageName',$pageName);
})->name('products');
Route::get('contact', function () {
    $pageName="Contact";
    return view('contact')->with('pageName',$pageName);
})->name('contact');
Route::get('login', function () {
    $pageName="Login";
    return view('login')->with('pageName',$pageName);
})->name('login');
