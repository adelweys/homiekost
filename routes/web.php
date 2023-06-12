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
use App\Http\Controllers\Admin\TenantController;
use App\Http\Controllers\Admin\CostCmsController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\KamarController;
use App\Http\Controllers\Admin\OwnerController;
use App\Http\Controllers\Admin\VerifKosController;
use App\Http\Controllers\Admin\VerifOwnerController;
use App\Http\Controllers\ChatController;
use GuzzleHttp\Middleware;

// route untuk index
Route::get('/', [CostController::class, 'index'])->name('index');
Route::get('/Cost-List', [CostController::class, 'cost_list'])->name('cost-list');
Route::post('/comment', [CostController::class, 'commentStore'])->name('cost.comment');
Route::post('/reply', [CostController::class, 'replyStore'])->name('cost.reply');
Route::post('/rating', [CostController::class, 'ratingStore'])->name('cost.rating');

// Route::get('/chat', [CostController::class, 'index'])->name('chat.index')->middleware('auth');
Route::post('/chat/send', [CostController::class, 'sendMessage'])->name('chat.send')->middleware('auth');

// filtering
Route::get('/Cost-List/Search', [CostController::class, 'search'])->name('cost-list-search');

// route untuk detail kos dengan id dan nama
// Route::get('/Cost-List/{id}/{name}', [CostController::class, 'show_cost_details'])->name('cost-details');


// route untuk detail kos
Route::get('/Cost-List/{slug}', [CostController::class, 'show'])->name('show');

// route for Middleware message
use App\Http\Controllers\MessageController;

Route::middleware(['auth'])->group(function () {
    // Route untuk halaman pengaduan/pertanyaan
    Route::get('/Contact', [MessageController::class, 'create'])->name('message.create');
    Route::post('/Contact', [MessageController::class, 'store'])->name('message.store');
});





Route::get('/About', function () {
    return view('main.about');
})->name('about');

// Route::get('/Contact', function () {
//     return view('main.contact');
// }) -> name('contact');


Route::get('/detail', function () {
    return view('main.detailKos');
})->name('detail');
// routes/web.php

Route::get('/Owner-Registration-Form', function () {
    return view('form');
})->name('daftar-penyewa');





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
// Route::get('/verify-email', [AuthController::class, 'showVerifyEmailForm'])->name('verify-email');
// Route::post('/verify-email', [AuthController::class, 'verifyEmail'])->name('verification.verify');


//edit profil
// Route::get('/Profile', function () {
//     return view('main.profile');
// });

use App\Http\Controllers\ProfileController;
//route edit profil
Route::get('/Profile/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('auth');
Route::post('/Profile/update', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');






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

Route::resource('/data-tenant', TenantController::class);
Route::resource('/data-kos', CostCmsController::class);
Route::resource('/data-kamar', KamarController::class);
Route::resource('/data-fasilitas', FasilitasController::class);
Route::resource('/data-owner', OwnerController::class);

Route::resource('/data-verifkos', VerifKosController::class);
Route::resource('/data-verifowner', VerifOwnerController::class);
