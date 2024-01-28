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
    return view('index');
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/comics-0', function () {
    return view('single_comics.comics0');
});

Route::get('/comics-1', function () {
    return view('single_comics.comics1');
});

Route::get('/comics-2', function () {
    return view('single_comics.comics2');
});

Route::get('/comics-3', function () {
    return view('single_comics.comics3');
});

Route::get('/comics-4', function () {
    return view('single_comics.comics4');
});

Route::get('/comics-5', function () {
    return view('single_comics.comics5');
});

Route::get('/comics-6', function () {
    return view('single_comics.comics6');
});

Route::get('/comics-7', function () {
    return view('single_comics.comics7');
});

Route::get('/comics-8', function () {
    return view('single_comics.comics8');
});

Route::get('/comics-9', function () {
    return view('single_comics.comics9');
});

Route::get('/comics-10', function () {
    return view('single_comics.comics10');
});

Route::get('/comics-11', function () {
    return view('single_comics.comics11');
});
