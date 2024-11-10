<?php

use Illuminate\Http\Request;
use App\Http\Controllers\{
    ApiController,
};
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

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