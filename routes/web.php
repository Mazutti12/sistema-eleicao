<?php

use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\EleitoresController;
use App\Http\Controllers\PeriodosController;
use App\Http\Controllers\VotosController;
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

#############
#### Home ###
#############
Route::get('/', function () {
    return view('home');
});

################
#### Eleitores ####
################
Route::get('/eleitores', [EleitoresController::class, 'index']);
Route::get('/eleitores/create', [EleitoresController::class, 'create']);
Route::get('/eleitores/show/{id}', [EleitoresController::class, 'show'])->where('id', '[0-9]+');
Route::get('/eleitores/destroy/{id}', [EleitoresController::class, 'destroy']);
Route::post('/eleitores/store', [EleitoresController::class, 'store']);
Route::post('/eleitores/update', [EleitoresController::class, 'update']);

#####################
#### Rotas Periodos ####
#####################
Route::get('/periodos', [PeriodosController::class, 'index']);
Route::get('/periodos/create', [PeriodosController::class, 'create']);
Route::post('/periodos/store', [PeriodosController::class, 'store']);
Route::post('/periodos/update', [PeriodosController::class, 'update']);
Route::get('/periodos/show/{id}', [PeriodosController::class, 'show'])->where('id', '[0-9]+');
Route::get('/periodos/destroy/{id}', [PeriodosController::class, 'destroy']);

###########################
##### Rotas Candidatos ####
###########################

Route::get('/candidatos', [CandidatosController::class, 'index']);
Route::get('/candidatos/create', [CandidatosController::class, 'create']);
Route::post('/candidatos/store', [CandidatosController::class, 'store']);
Route::post('/candidatos/update', [CandidatosController::class, 'update']);
Route::get('/candidatos/show/{id}', [CandidatosController::class, 'show'])->where('id', '[0-9]+');
Route::get('/candidatos/destroy/{id}', [CandidatosController::class, 'destroy']);


############################
##### Rotas votos ##########
############################

Route::get('/votos', [VotosController::class, 'index']);
Route::get('/votos/create', [VotosController::class, 'create']);
Route::post('/votos/store', [VotosController::class, 'store']);

