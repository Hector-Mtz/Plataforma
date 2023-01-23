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
        Schema::create('artefacto_stats', function (Blueprint $table) {
            $table->id();
            $table->string('aumento_instinto');
            $table->string('descripcion');
            $table->string('imagen');
            $table->foreignId('pasiva_id')->nullable()->constrained('artefacto_pasivas');
            $table->foreignId('instinto_id')->constrained('instintos');
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
        Schema::dropIfExists('artefacto_stats');
    }
};
