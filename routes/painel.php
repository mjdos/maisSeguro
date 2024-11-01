<?php

use App\Http\Controllers\
{   
    LoginController,
    PainelController,
    ProductController,
};
use Illuminate\Support\Facades\Route;


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);


///Rotas Autenticadas
Route::middleware('auth')->group(function () {

    Route::get('/home', [PainelController::class, 'index'])->name('home.index');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


    // Tela Referência
    Route::get('/referencia', [PainelController::class, 'referencia'])->name('referencia.index');

    //Tela de Demandas
    Route::get('/demanda', [PainelController::class, 'demandas'])->name('demandas.index');
    Route::post('/criar_nova_demandas', [PainelController::class, 'storeDemandas'])->name('criar_nova_demandas.store');
    Route::get('/listar_demandas', [PainelController::class, 'listar_demandas'])->name('listar_demandas.index');
    Route::get('/entrega_demanda', [PainelController::class, 'entrega_demanda'])->name('entrega_demanda.index');
    Route::get('/home_demandas_entregues/{id}', [PainelController::class, 'home_demandas_entregues'])->name('home_demandas_entregues.index');
    Route::get('/analisar_demandas', [PainelController::class, 'analisar_demandas'])->name('analisar_demandas.index');
    Route::get('/colocacao', [PainelController::class, 'colocacao'])->name('colocacao.index');
    
    Route::get('/marcadores', [PainelController::class, 'marcadores'])->name('marcadores.index');
    
    Route::get('/visualizar_entregas', [PainelController::class, 'visualizar_entregas'])->name('visualizar_entregas.index');



});