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
    $nav = '1';
    return view('Grids',compact('subpage','nav'));
})->name('grids');

Route::get('/colors-examples', function () {
    $subpage = '1';
    $nav = '2';
    return view('Colors',compact('subpage','nav'));
})->name('colors');

Route::get('/animations-examples', function () {
    $subpage = '1';
    $nav = '3';
    return view('Animations',compact('subpage','nav'));
})->name('animations');

