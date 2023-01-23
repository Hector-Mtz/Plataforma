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
        Schema::create('rotacion_personajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rotacion_id')->constrained('rotaciones');
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
        Schema::dropIfExists('rotacion_personajes');
    }
};
