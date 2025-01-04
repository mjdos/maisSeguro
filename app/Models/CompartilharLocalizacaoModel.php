<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompartilharLocalizacaoModel extends Model
{
    use HasFactory;

    protected $table = 'api_compartilhar_localizacao';

    protected $fillable = [
        'user_id',
        'longitude',
        'latitude',
        'comando',
        'created_at',
        'updated_at',
    ];
}
