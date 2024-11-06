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
        Schema::create('acompanhamento_gps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acompanhamento_id')->unsigned();
            $table->foreign('acompanhamento_id')
            ->references('id')
            ->on('acompanhamentos');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acompanhamento_gps');
    }
};
