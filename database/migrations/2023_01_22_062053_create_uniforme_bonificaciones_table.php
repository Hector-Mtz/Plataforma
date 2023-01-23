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
        Schema::create('uniforme_bonificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('uniforme_id')->constrained('uniformes');
            $table->foreignId('bonificacion_id')->constrained('bonificaciones');
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
        Schema::dropIfExists('uniforme_bonificaciones');
    }
};
