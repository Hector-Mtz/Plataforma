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
        Schema::create('conjunto_pjs', function (Blueprint $table) {
            $table->id();
            $table->integer('max_pts');
            $table->foreignId('PJ_1')->constrained('personajes');
            $table->foreignId('PJ_2')->constrained('personajes');
            $table->foreignId('PJ_3')->constrained('personajes');
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
        Schema::dropIfExists('conjunto_pjs');
    }
};
