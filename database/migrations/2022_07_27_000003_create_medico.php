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
        Schema::create('medico', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('especialidad');
            $table->string('edad');
            //$table->timestamps();
            $table->foreignId('id_paciente')->constrained('paciente');
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medico');
    }
};
