<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EleitoresController extends Controller
{
    public function index()
    {
        try {
            return view('eleitores.index');
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function create(){
        try{
            
        }catch(\Exception $e){
            return $e;
        }
    }
}
