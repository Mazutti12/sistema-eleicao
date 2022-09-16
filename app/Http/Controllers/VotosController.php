<?php

namespace App\Http\Controllers;

use App\Models\Votos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotosController extends Controller
{
    public function index()
    {
        try {
            $votos = Votos::leftJoin('candidatos', 'candidatos.id', '=', 'votos.candidato_id')
            ->select(
                'candidatos.nome',
            )
                ->first();

            return view('votos.index', ['votos' => $votos]);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function store(Request $request)
    {
        try {

            $data = $request->all();

            unset($data['_token']);

            DB::transaction();

            Votos::insert($data);

            DB::commit();

            return redirect('/votos');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }

    }
    public function create()
    {
        try {
            return view('votos.create');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
