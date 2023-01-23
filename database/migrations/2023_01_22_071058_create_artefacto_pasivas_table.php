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
        Schema::create('artefacto_pasivas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('stat_1');
            $table->string('stat_2')->nullable();
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
        Schema::dropIfExists('artefacto_pasivas');
    }
};
