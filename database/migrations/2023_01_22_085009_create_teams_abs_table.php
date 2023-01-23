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
        Schema::create('teams_abs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tipo_ab_id')->constrained('ab_tipos');
            $table->foreignId('conjunto_restricciones_id')->constrained('conjunto_restricciones');
            $table->foreignId('conjunto_pjs_id')->constrained('conjunto_pjs');
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
        Schema::dropIfExists('teams_abs');
    }
};
