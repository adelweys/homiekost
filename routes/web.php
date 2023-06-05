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
use App\Http\Controllers\CostController;
// route untuk index
Route::get('/', [CostController::class, 'index'])->name('index');

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

Route::get('/Owner-Registration-Form', function () {
    return view('form');
})-> name('daftar-penyewa');





Route::get('/daftarKamar', function () {
    return view('daftarKamar');
});

Route::get('/daftarKos', function () {
    return view('daftarKos');
});

Route::get('/detailKos', function () {
    return view('detailKos');
});

Route::get('/forms', function () {
    return view('forms');
});

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



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

Route::get('/foto', function () {
    return view('foto');
});
