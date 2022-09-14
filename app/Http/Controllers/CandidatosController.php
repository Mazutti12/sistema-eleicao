<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatosController extends Controller
{
    function index()
    {
        $candidatos = DB::table('candidatos')
            ->selectRaw("
            id,
            nome,
            partido,
            sigla_partido,
            numero,
            cargo,
            periodo_id
            ")
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


        Candidato::insert($data);

        return redirect('/candidatos');
    }

    function update(Request $request)
    {
        $data = $request->all();

        unset($data['_token']);

        $id = array_shift($data);

        Candidato::where('id', $id)->update($data);

        return redirect('/candidatos');
    }

    function show($id)
    {
        $candidato = Candidato::find($id);

        return view('candidatos.show', ['candidato' => $candidato]);
    }

    function destroy($id)
    {
        Candidato::where('id', $id)->delete();
        // DB::delete("DELETE FROM eleitores WHERE id = ?", [$id]);

        return redirect('/candidatos');
    }
}
