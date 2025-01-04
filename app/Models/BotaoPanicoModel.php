<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BotaoPanicoModel extends Model
{
    use HasFactory;

    protected $table = 'api_botao_panico';

    protected $fillable = [
        'user_id',
        'longitude',
        'latitude',
    ];

}
