<?php

namespace App\Http\Controllers;

use App\Models\Eleitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EleitoresController extends Controller
{
    public function index()
    {
        try {
            $eleitores = Eleitor::selectRaw('
                id,
                nome,
                titulo,
                zona,
                secao
            ')
                ->get();

            return view('eleitores.index', ['eleitores' => $eleitores]);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function create()
    {
        try {
            return view('eleitores.create');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function show($id)
    {
        try {

            $eleitor = Eleitor::find($id);

            return view('eleitores.show', ['eleitor' => $eleitor]);
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function destroy($id)
    {
        try {

            Eleitor::where('id', $id)->delete();
            // DB::delete("DELETE FROM eleitores WHERE id = ?", [$id]);

            return redirect('/eleitores');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function store(Request $request)
    {
        try {

            $data = $request->all();

            unset($data['_token']);
            $data['titulo'] = str_replace('.','',$data['titulo']);
            var_dump($data['titulo']);
            Eleitor::insert($data);

            return redirect('/eleitores');
        } catch (\Exception $e) {
            echo "<pre>".$e;
        }
    }
    public function update(Request $request)
    {
        try {
            $data = $request->all();

            unset($data['_token']);

            $id = array_shift($data);

            Eleitor::where('id', $id)->update($data);

            return redirect('/eleitores');
        } catch (\Exception $e) {
            return $e;
        }
    }
}
