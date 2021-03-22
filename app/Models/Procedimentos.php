<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimentos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descricao',
        'preco',
    ];
    public function agenda(){
        return $this->hasMany(Agendamento::class, 'AGE_PRO_CODIGO');
    }
}
