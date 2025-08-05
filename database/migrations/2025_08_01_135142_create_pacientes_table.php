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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string(column:'nombres', length:200);
            $table->string(column:'apellidos', length:200);
            $table->string(column:'dni',length:20)->unique();
             $table->string(column:'nro_seguro_cuil',length:20)->unique();


            $table->string(column:'fecha_nacimiento',length:11);
            $table->string(column:'genero',length:25);
            $table->string(column:'celular', length:100)->unique();
            $table->string(column:'email', length:100)->unique();
            $table->string(column:'direccion',length:255);
            $table->string(column:'grupo_sanguineo', length:100);
            $table->string(column:'enfermedades_preexistentes',length:255);
            $table->string(column:'medicacion_actual',length:255)->nullable();
            $table->string(column:'alergias', length:255)->nullable();
            $table->string(column:'contacto_emergencia', length:100);
            $table->string(column:'observaciones',length:255)->nullable();
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
        Schema::dropIfExists('pacientes');
    }
};
