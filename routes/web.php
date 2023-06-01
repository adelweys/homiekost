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
    return view('index');
}) -> name('home');
Route::get('/About', function () {
    return view('about');
}) -> name('about');
Route::get('/Cost-List', function () {
    return view('kos-card');
}) -> name('cost-list');
Route::get('/Contact', function () {
    return view('contact');
}) -> name('contact');
// routes/web.php
