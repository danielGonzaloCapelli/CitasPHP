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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia');
            $table->time('hora_inicio');
            $table->time('hora_fin');

            $table->timestamps();

            $table->unsignedBigInteger(column:'doctors_id');
            $table->unsignedBigInteger(column:'consultorios_id');


           $table->foreignId('doctors_id')->references('id')->on('doctors')->onDelete(action:'cascade');

           $table->foreignId('consultorios_id')->references('id')->on('consultorios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
