<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->string('DNI', 8);
            $table->date('fecha');
            $table->unique(['DNI', 'fecha']);
            $table->foreign('DNI')->references('DNI')->on('colegios')->onDelete('cascade');
            $table->boolean('tipo');
            $table->text('observación');
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
        Schema::dropIfExists('asistencias');
    }
}
