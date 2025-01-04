<?php

use App\Http\Controllers\LocalizacaoController;
use App\Http\Controllers\{
    ApiLocalizacaoController,
    ApiLoginController,
    ApiPanicoController
};
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'mjsp/v1'], function () {

    Route::post('/login', [ApiLoginController::class, 'login']);
    Route::post('/localizacao', [ApiLocalizacaoController::class, 'store']);
    Route::post('/panico', [ApiPanicoController::class, 'store']);

});

/*
    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/demandas', [ApiController::class, 'getAllDemandas'])->name('allDemandas');
    Route::get('/demandas/{id}', [ApiController::class, 'getDemanda'])->name('getDemandas');
    Route::post('/demandasStore', [ApiController::class, 'storeDemanda'])->name('storeDemanda');


    //Panico
    Route::get('/panicos', [ApiController::class, 'getAllPanico'])->name('allDemandasPanico');
    Route::get('/panico/{id}', [ApiController::class, 'getPanico'])->name('getPanico');
    Route::post('/panicoStore', [ApiController::class, 'storePanico'])->name('storePanico');


    //Ocorrencia
    Route::get('/getAllOcorrencia', [ApiController::class, 'getAllOcorrencia'])->name('getAllOcorrencia');
    Route::get('/getOcorrencia/{id}', [ApiController::class, 'getOcorrencia'])->name('getOcorrencia');
    Route::post('/storeInformacaoOcorrencia', [ApiController::class, 'storeInformacaoOcorrencia'])->name('storeInformacaoOcorrencia');
    Route::post('/logar', [ApiController::class, 'logar'])->name('api.login');

    Route::group(['prefix' => 'localization/v1'], function () {

        Route::post('/compartilharlocalization', [LocalizacaoController::class, 'compartilharLocalizacao'])->name('compartilharLocalizacao');
        Route::post('/botaopanico', [LocalizacaoController::class, 'botaoPanico'])->name('botaoPanico');
        Route::post('/gerartoken', [LocalizacaoController::class, 'gerarToken'])->name('gerarToken');

    });
*/