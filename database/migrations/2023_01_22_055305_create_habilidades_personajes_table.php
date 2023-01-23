<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilidades_personajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('habilidad_id')->constrained('habilidades');
            $table->foreignId('personaje_id')->constrained('personajes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilidades_personajes');
    }
};
