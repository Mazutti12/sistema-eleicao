<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
   protected $table = "periodos";

   protected $fillable = [
        'nome',
        'dt_inicio' ,
        'dt_fim'
    ];
}

