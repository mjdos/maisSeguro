<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;
 
class StatusTableSeeder extends Seeder
{
    public function run()
    {
        Status::create(['id' => '1', 'status' => 'Inativo']);
        Status::create(['id' => '2', 'status' => 'Ativo']);
    }
}