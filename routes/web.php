<?php

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
    $title ="_Halo_";
    $content ="_Love_";
    return view('welcome')->with([
        'title' => $title,
        'content' => $content ]);
})->name('home');

Route::get('/contact', function () {
    //return "ส่งเมล์มาที่ feeltheglow555@gmail.com";
    $title ="_HaloLO_";
    $content ="_UnLove_";
    return view('contact')->with([
        'title' => $title,
        'content' => $content ]);
    //return view('contact');
})->name('contact')->middleware('auth');

Route::get('/about', function () {
    //return "Control";
    $title ="Goddress";
    $content ="_Strom_";
    return view('about')->with([
        'title' => $title,
        'content' => $content ]);
    //return view('aboutc');
})->name('about'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
