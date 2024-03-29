<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MalewaController;
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


Route::middleware(['web'])->group(function (){
    Route::get('/portal', function () {
        return view('login');
    })->name('login');

    // Registrasi User
    Route::get('/regisUser', [UserController::class, 'formRegis']);
    Route::post('/sendRegisUser', [UserController::class, 'sendRegis']);

    Route::post('/LoginAuth', [AuthController::class, 'loginUser']);
    Route::get('/karirMalewa', [MalewaController::class, 'index']);
    Route::get('/portofolioMalewa', [MalewaController::class, 'portoMalewa']);
    Route::get('/detailKarirMalewa/{id}', [MalewaController::class, 'detailKarir']);
    Route::get('/contact', function () {
        return view('malewa.contact');
    });
    Route::get('/aboutUs', function () {
        return view('malewa.about');
    });
});

Route::get('/', function () {
    return view('malewa.index');
});


// Route Super Admin
Route::middleware(['auth:admin'])->group(function (){
    Route::get('/dashboardAdmin/{id}', [AdminController::class, 'index'])->name('dashboardAdmin');
    Route::get('/logoutAdmin', [AuthController::class, 'logoutAdmin']);
    Route::get('/verifUser/{id}', [AdminController::class, 'verifUser']);
    Route::get('/manageUser/{id}', [AdminController::class, 'manageUser']);
    Route::get('/addPorto/{id}', [AdminController::class, 'addPorto']);
    Route::get('/managePortofolio/{id}', [AdminController::class, 'managePorto']);
    Route::post('/savePorto', [AdminController::class, 'savePorto']);
    Route::get('/manageKarir/{id}', [AdminController::class, 'manageKarir']);
    Route::post('/saveKarirMalewa', [AdminController::class, 'saveKarirMalewa']);
    Route::get('/addKarir/{id}', [AdminController::class, 'addKarir']);
    Route::get('/destroyKarir/{id}', [AdminController::class, 'destroyKarir']);
    Route::get('/destroyPorto/{id}', [AdminController::class, 'destroyPorto']);
    Route::get('/editPorto/{id}', [AdminController::class, 'editPorto']);
    Route::get('/editKarir/{id}', [AdminController::class, 'editKarir']);
    Route::post('/sendEditPorto/{id}', [AdminController::class, 'sendEditPorto']);
    Route::post('/sendEditKarir/{id}', [AdminController::class, 'sendEditKarir']);
    Route::get('/sendVerifUser/{id}', [AdminController::class, 'sendVerifUser']);
    Route::get('/cancelVerifUser/{id}', [AdminController::class, 'cancelVerifUser']);
});

// Route User
Route::middleware(['middleware' => 'user.data'])->group(function (){
    Route::get('/dashboardUser/{id}', [UserController::class, 'index'])->name('dashboardUser');
    Route::get('/addPortoByUser/{id}', [UserController::class, 'addPorto']);
    Route::post('/savePortoByUser', [UserController::class, 'savePorto']);
    Route::get('/destroyPortoByUser/{id}', [UserController::class, 'destroyPorto']);
    Route::get('/editPortoByUser/{id}', [UserController::class, 'editPorto']);
    Route::post('/sendEditPortoByUser/{id}', [UserController::class, 'sendEditPorto']);

    Route::get('/manageKarirByUser/{id}', [UserController::class, 'manageKarir']);
    Route::get('/addKarirByUser/{id}', [UserController::class, 'addKarir']);
    Route::post('/saveKarirMalewaByUser', [UserController::class, 'saveKarirMalewa']);
    Route::get('/editKarirByUser/{id}', [UserController::class, 'editKarir']);
    Route::get('/destroyKarirByUser/{id}', [UserController::class, 'destroyKarir']);
    Route::post('/sendEditKarirByUser/{id}', [UserController::class, 'sendEditKarir']);

    Route::get('/logoutAdmin', [AuthController::class, 'logoutAdmin']);
});
