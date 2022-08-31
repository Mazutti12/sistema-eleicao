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
    return view('welcome');
});

########################
#### Rotas Periodos ####
########################

Route::get('/periodos', [PeriodoController::class, 'index']);
Route::get('/periodos/create', [PeriodoController::class, 'create']);
Route::post('/periodos/store', [PeriodoController::class, 'store']);
Route::post('/periodos/update', [PeriodoController::class, 'update']);
Route::get('/periodos/show/{id}', [PeriodoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/periodos/destroy/{id}', [PeriodoController::class, 'destroy']);

