<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsuarioTable extends Migration
{

    public function up()
    {
        Schema::create('tipo_usuario', function (Blueprint $table) {

            $table->increments('id');
            $table->string('tipo')->nullable();
            $table->timestamps();

        });

    }

    public function down()
    {
        Schema::dropIfExists('tipo_usuario');
    }
    
}
