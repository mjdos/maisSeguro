<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('informacoes_ocorrencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('informacoes_id')->unsigned();
            $table->foreign('informacoes_id')
            ->references('id')
            ->on('informacoes');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('informacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacoes_ocorrencia');
    }
};
