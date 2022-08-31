<?php

use App\Http\Controllers\EleitoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CandidatoController;
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

####################
#### Rotas Navbar ####
####################

Route::get('home', [FrontController::class, 'home'])->name('home');
Route::get('products', [FrontController::class, 'products'])->name('products.index');
Route::get('about-us', [FrontController::class, 'aboutUs'])->name('about.us');
#######################
#### Rotas Candidatos ####
#######################
###################
#### Eleitores ####
###################
Route::get('/eleitores', [EleitoresController::class, 'index']);
########################
#### Rotas Periodos ####
########################

Route::get('/periodos', [PeriodoController::class, 'index']);
Route::get('/periodos/create', [PeriodoController::class, 'create']);
Route::post('/periodos/store', [PeriodoController::class, 'store']);
Route::post('/periodos/update', [PeriodoController::class, 'update']);
Route::get('/periodos/show/{id}', [PeriodoController::class, 'show'])->where('id', '[0-9]+');
Route::get('/periodos/destroy/{id}', [PeriodoController::class, 'destroy']);

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
