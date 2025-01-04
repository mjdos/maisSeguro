<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name'      => 'Administrador',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('1234'),
            'bloqueado' => 'N',
            'tipo_id'   => 1
        ]);
        User::create([
            'name'      => 'Marcelo Santos',
            'email'     => 'mjdos.2014@gmail.com',
            'password'  => bcrypt('1234'),
            'bloqueado' => 'N',
            'tipo_id'   => 2
        ]);
        User::create([
            'name'      => 'Anônimo',
            'email'     => 'anonimo@anonimo.com',
            'password'  => bcrypt('1234'),
            'bloqueado' => 'N',
            'tipo_id'   => 3
        ]);
        
    }

}