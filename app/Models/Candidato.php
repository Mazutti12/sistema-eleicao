<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    protected $table = 'candidatos';

    protected $fillable = [
        'id',
        'nome',
        'partido',
        'sigla_partido',
        'numero',
        'cargo',
        'periodo_id'
    ];
}
