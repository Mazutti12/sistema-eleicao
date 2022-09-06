<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\EleitoresController;
use App\Http\Controllers\PeriodosController;
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


###################
####   Home    ####
###################
Route::get('/', function () {
    return view('home');
});

###################
#### Eleitores ####
###################
Route::get('/eleitores', [EleitoresController::class, 'index']);
Route::get('/eleitores/create', [EleitoresController::class, 'create']);
Route::get('/eleitores/show/{id}', [EleitoresController::class, 'show'])->where('id', '[0-9]+');
Route::get('/eleitores/destroy/{id}', [EleitoresController::class, 'destroy']);
Route::post('/eleitores/store', [EleitoresController::class, 'store']);
Route::post('/eleitores/update', [EleitoresController::class, 'update']);
########################
#### Rotas Periodos ####
########################

Route::get('/periodos', [PeriodosController::class, 'index']);
Route::get('/periodos/create', [PeriodosController::class, 'create']);
Route::post('/periodos/store', [PeriodosController::class, 'store']);
Route::post('/periodos/update', [PeriodosController::class, 'update']);
Route::get('/periodos/show/{id}', [PeriodosController::class, 'show'])->where('id', '[0-9]+');
Route::get('/periodos/destroy/{id}', [PeriodosController::class, 'destroy']);

############################
##### Rotas Candidatos #####
############################

Route::get('/candidatos', [CandidatoController::class, 'index']);
Route::get('/candidatos/{id}/show', [CandidatoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/candidatos/create', [CandidatoController::class, 'create']);
Route::post('/candidatos/store', [CandidatoController::class, 'store']);
Route::get('/candidatos/{id}/edit', [CandidatoController::class, 'edit']);
Route::post('/candidatos/update', [CandidatoController::class, 'update']);
Route::get('/candidatos/{id}/destroy', [CandidatoController::class, 'destroy']);
