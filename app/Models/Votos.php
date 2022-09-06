<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
    use HasFactory;

    protected $table = "votos";

    protected $fillable = [
        'id',
        'horario_voto',
        'votante_id',
        'candidato_id',
        'zona',
        'secao'
    ];  
}
