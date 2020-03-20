<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->string('DNI', 8);
            $table->date('fecha');
            $table->unique(['DNI', 'fecha']);
            $table->foreign('DNI')->references('DNI')->on('academias')->onDelete('cascade');
            $table->float('puntajeSM', 8, 4);
            $table->float('puntajeVilla', 8, 4);
            $table->float('puntajeCallao', 7, 4);
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
        Schema::dropIfExists('examens');
    }
}
