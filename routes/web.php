<?php

use App\Http\Controllers\{
    SiteController,
    ProductController,
    LoginController
};
use Illuminate\Support\Facades\Route;




///Site
Route::get('/', [SiteController::class, 'index'])->name('home');

//painel 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


Route::middleware('auth')->group(function () {

    Route::get('/painel-home', [SiteController::class, 'home'])->name('home.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/logout_site', [SiteController::class, 'logout_site'])->name('logout_site');

    Route::get('/ranking', [SiteController::class, 'ranking'])->name('ranking');
    Route::get('/entregas_user', [SiteController::class, 'entregas_user'])->name('entregas_user');
    Route::get('/categorizar', [SiteController::class, 'categorizar'])->name('categorizar');
    Route::get('/principal', [SiteController::class, 'principal'])->name('principal');
    Route::get('/emergencia', [SiteController::class, 'emergencia'])->name('emergencia');
    Route::get('/alerta', [SiteController::class, 'alerta'])->name('alerta');
    Route::get('/mapa', [SiteController::class, 'mapa'])->name('mapa');
    Route::get('/localizacao', [SiteController::class, 'localizacao'])->name('localizacao');
});