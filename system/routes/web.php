<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TempatOlahragaController;
use App\Http\Controllers\AdminPemilikTempatController;
use App\Http\Controllers\PemilikTempatController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\RegistrasiController;


// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/maps', function () {
//     return view('maps');
// });

Route::get('/',[UserController::class,'index']);
Route::get('maps',[UserController::class,'maps']);
Route::get('faq',[UserController::class,'faq']);


Route::get('/login',[AuthController::class,'login']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('registrasi', [RegistrasiController::class, 'registrasi']);
Route::post('registrasi', [RegistrasiController::class, 'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'index']);
    Route::get('dashboard_admin',[AdminController::class,'dashboard_admin']);
    Route::get('dashboard_pemilik_tempat',[AdminController::class,'dashboard_pemilik_tempat']);

    Route::get('tempat_olahraga/',[TempatOlahragaController::class,'index']);

    Route::get('admin_pemilik_tempat/',[AdminPemilikTempatController::class,'index']);
    Route::get('admin_pemilik_tempat/{id}',[AdminPemilikTempatController::class,'show']);
    Route::post('admin_pemilik_tempat/status_akun',[AdminPemilikTempatController::class,'status_akun']);
    Route::delete('admin_pemilik_tempat/user/{user}', [AdminPemilikTempatController::class, 'destroy']);

    Route::get('faq',[FaqController::class,'index']);
    Route::get('faq/create',[FaqController::class,'create']);
    Route::post('faq',[FaqController::class,'store']);
    Route::delete('faq/{faq}',[FaqController::class,'destroy']);
    
    Route::get('pemilik_tempat/',[PemilikTempatController::class,'index']);
    Route::get('pemilik_tempat/faq',[PemilikTempatController::class,'faq_pemilik_tempat']);
});

