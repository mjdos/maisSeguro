<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcompanhamentoGps extends Model
{
    use HasFactory;

    protected $table = 'acompanhamento_gps';

    protected $fillable = [

        'id',
        'acompanhamento_id',
        'latitude',
        'longitude',

    ];

    public function acompanhamento()
    {
        return $this->belongsTo(Acompanhamentos::class, 'acompanhamento_id');
    }
}
