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
    $subpage = '0';
    return view('index',compact('subpage'));
})->name('index');


Route::get('/layouts-examples', function () {
    $subpage = '1';
    return view('Grids',compact('subpage'));
})->name('grids');

Route::get('/animations-examples', function () {
    $subpage = '1';
    return view('Animations',compact('subpage'));
})->name('animations');

Route::get('/colors-examples', function () {
    $subpage = '1';
    return view('Colors',compact('subpage'));
})->name('colors');