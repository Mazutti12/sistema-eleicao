<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodosController extends Controller
{
    //
    function index(){
        $periodos = DB::table('periodos')
        ->selectRaw("id, nome, dataHora_inicio, dataHora_fim ")
        ->orderBy('nome')
        ->get();

    return view('periodos.index', [
        'periodos' => $periodos
    ]);
    }

    function create(){

    }
    function store(){

    }
    function update(){

    }
    function show(){

    }
    function delete(){
    }
}
