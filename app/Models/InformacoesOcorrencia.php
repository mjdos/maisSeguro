<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacoesOcorrencia extends Model
{
    use HasFactory;

    protected $table = 'informacoes_ocorrencia';

    protected $fillable = [
        'informacoes_id',
        'latitude',
        'longitude',
        'informacoes',
        'user_id',
    ];


}
