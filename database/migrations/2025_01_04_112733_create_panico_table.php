<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('panico', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('longitude');
            $table->string('latitude');
            $table->integer('status')->unsigned();
            $table->foreign('status')
                ->references('id')
                ->on('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('panico');
    }

};
