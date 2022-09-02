<?php

namespace App\Http\Controllers;

use App\Models\Eleitor;
use Illuminate\Http\Request;

class EleitoresController extends Controller
{
    public function index($id)
    {
        try {
            $eleitores = Eleitor::where('id', $id)
            ->select('
                id,
                nome,
                zona,
                secao
            ')
            ->first();

            return view('eleitores.index', ['eleitores' => $eleitores]);

        } catch (\Exception $e) {
            return $e;
        }
    }
    public function create(){
        try{


            return view('eleitores.create');
        }catch(\Exception $e){
            return $e;
        }
    }
}
