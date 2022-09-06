<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodosController extends Controller
{
    public function index()
    {
        $periodos = Periodo::selectRaw("
                id,
                date_format(dt_inicio, '%d/%m/%Y %H:%i') as dt_inicio,
                date_format(dt_fim, '%d/%m/%Y %H:%i') as dt_fim
            ")
            ->get();

        return view('periodos.index', ['periodos' => $periodos]);
    }
    public function create()
    {
        return view('periodos.create');

    }
    public function show($id)
    {

        $periodo = Periodo::find($id);

        return view('periodos.show', ['periodo' => $periodo]);
    }
    public function destroy($id)
    {
        Periodo::where('id', $id)->delete();
        // DB::delete("DELETE FROM eleitores WHERE id = ?", [$id]);

        return redirect('/periodos');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        unset($data['_token']);

        Periodo::insert($data);

        return redirect('/periodos');
    }
    public function update(Request $request)
    {

        $data = $request->all();
        unset($data['_token']);

        //Descobrir como faz com modal
        DB::table('periodos')->update($data);

        // Eleitor::update($data);
        // Eleitor::where('id', $id)->update();

        return redirect('/periodos');
    }
}
