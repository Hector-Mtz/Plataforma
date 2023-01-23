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
        Schema::create('equipacion_urus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('equipacion_id')->constrained('equipaciones');
            $table->foreignId('uru_id')->constrained('urus');
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
        Schema::dropIfExists('equipacion_urus');
    }
};
