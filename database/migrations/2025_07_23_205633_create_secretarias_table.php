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
        Schema::create('secretarias', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name', length:100);
            $table->string(column:'apellidos', length:200);
            $table->string(column:'dni',length:10)->unique();
            $table->string(column:'celular', length:100)->unique();
            $table->string(column:'fecha_nacimiento',length:11);
            $table->string(column:'direccion',length:255);
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
        Schema::dropIfExists('secretarias');
    }
};
