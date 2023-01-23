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
        Schema::create('equipaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conjunto_isos_id')->nullable()->constrained('conjunto_isos');
            $table->foreignId('ctp_id')->nullable()->constrained('ctps');
            $table->foreignId('artefacto_id')->nullable()->constrained('artefacto_stats');
            $table->foreignId('uniforme_id')->nullable()->constrained('uniforme_bonificaciones');
            $table->foreignId('reliquia_id')->nullable()->constrained('reliquias');
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
        Schema::dropIfExists('equipaciones');
    }
};
