<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatoController extends Controller
{
    function index()
    {
        $candidatos = DB::table('candidatos')
            ->selectRaw("id, nome, partido, sigla_partido, numero, cargo, periodo_id")
            ->orderBy('nome')
            ->get();

        return view('candidatos.index', [
            'candidatos' => $candidatos
        ]);
    }

    function create()
    {
        return view('candidatos.create');
    }

    function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        DB::table('candidatos')->insert($data);

        return redirect('/candidatos');
    }

    function edit($id)
    {
        $candidato = DB::table('candidatos')->find($id);

        return view('candidatos.edit', ['candidato' => $candidato]);
    }

    function update(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $id = array_shift($data);

        DB::table('candidatos')
            ->where('id', $id)
            ->update($data);

        return redirect('/candidatos');
    }

    function show($id)
    {
        $candidato = DB::table('candidatos')
            ->selectRaw("
            id,
            nome,
            partido,
            sigla_partido,
            numero,
            cargo,
            periodo_id,
        ")
            ->find($id);

        return view('candidatos.show', ['candidato' => $candidato]);
    }

    function destroy($id)
    {
        DB::table('candidatos')
            ->where('id', $id)
            ->delete();

        return redirect('/candidatos');
    }
}
