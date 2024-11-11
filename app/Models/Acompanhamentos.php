<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acompanhamentos extends Model
{
    use HasFactory;

    protected $table = 'acompanhamentos';

    protected $fillable = [
        'id',
        'user_id',
        'tipo_acompanhamento',
        'inicio',
        'fim',

    ];

    public function AcompanhamentoGps()
    {
        return $this->hasMany(AcompanhamentoGps::class, 'acompanhamento_id');
    }
    

}
