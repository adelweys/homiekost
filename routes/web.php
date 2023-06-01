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






Route::get('/daftarKamar', function () {
    return view('daftarKamar');
});

Route::get('/daftarKos', function () {
    return view('daftarKos');
});

Route::get('/detailKos', function () {
    return view('detailKos');
});
Route::get('/form', function () {
    return view('form');
});

Route::get('/forms', function () {
    return view('forms');
});

// Route::get('/kos_card', function () {
//     return view('kos_card');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/sewa', function () {
    return view('sewa');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
