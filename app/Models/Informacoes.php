<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacoes extends Model
{
    use HasFactory;

    protected $table = 'informacoes';

    protected $fillable = [

        'id',
        'user_id',

    ];
    
    public function informacoesOcorrencias()
    {
        return $this->hasMany(InformacoesOcorrencia::class, 'informacoes_id');
    }
}

