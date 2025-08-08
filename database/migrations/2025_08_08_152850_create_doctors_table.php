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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('licencia_medica');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('telefono')->nullable();
            $table->string('especialidad');

            $table->timestamps();

            $table->unsignedBigInteger(column:'user_id');
            $table->foreign(columns:'user_id')->references(columns:'id')->on('users')->onDelete(action:'cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
