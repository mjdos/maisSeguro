<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panico extends Model
{
    use HasFactory;

    protected $table = 'panico';

    protected $fillable = [

        'id',
        'user_id',
        'latitude',
        'longitude',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
