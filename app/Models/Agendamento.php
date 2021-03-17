<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;
    protected $primaryKey = 'AGE_CODIGO';

    protected $fillable = [
        'AGE_DATAIN',
        'AGE_DATAFI',
        'AGE_DISPONIVEL',
        'AGE_USE_CODIGO',
    ];
}
