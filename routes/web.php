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
    Route::get('/detailKarirMalewa/{id}', [MalewaController::class, 'detailKarir']);
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
});

// Route User
Route::middleware(['middleware' => 'user.data'])->group(function (){
    Route::get('/dashboardUser/{id}', [UserController::class, 'index'])->name('dashboardUser');
    Route::get('/logoutAdmin', [AuthController::class, 'logoutAdmin']);
});
