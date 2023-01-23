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
        Schema::create('carta_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carta_id')->constrained('cartas');
            $table->foreignId('stat_cantidad_id')->constrained('stat__cantidades');
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
        Schema::dropIfExists('carta_stats');
    }
};
