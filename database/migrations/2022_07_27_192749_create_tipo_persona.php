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
        Schema::create('tipo_persona', function (Blueprint $table) {
            $table->id('id');
            $table->string('tipo_persona');
            //$table->timestamps();
            $table->foreignId('id_paciente')->constrained('paciente');
            $table->foreignId('id_medico')->constrained('medico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_persona');
    }
};
