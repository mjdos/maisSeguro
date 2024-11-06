<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacoesOcorrencia extends Model
{
    use HasFactory;

    protected $table = 'informacoes_ocorrencia';

    protected $fillable = [

        'id',
        'informacoes_id',
        'latitude',
        'longitude',
        'informacoes',

    ];

    public function informacoes()
    {
        return $this->belongsTo(Informacoes::class, 'informacoes_id');
    }

}
