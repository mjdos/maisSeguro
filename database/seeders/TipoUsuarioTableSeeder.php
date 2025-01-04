<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoUsuario;
 
class TipoUsuarioTableSeeder extends Seeder
{
    public function run()
    {
        TipoUsuario::create(['id' => '1', 'tipo' => 'Administrador']);
        TipoUsuario::create(['id' => '2', 'tipo' => 'Usuário']);
        TipoUsuario::create(['id' => '3', 'tipo' => 'Anônimo']);
    }
}