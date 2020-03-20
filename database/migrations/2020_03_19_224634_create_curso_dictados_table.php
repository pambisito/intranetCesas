<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoDictadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_dictados', function (Blueprint $table) {
            $table->string('IDCurso', 3);
            $table->primary('IDCurso');
            $table->foreign('IDCurso')->references('ID')->on('cursos')->onDelete('cascade');
            $table->string('DNI', 8);
            $table->foreign('DNI')->references('DNI')->on('profesors')->onDelete('cascade');
            $table->string('dia', 10);
            $table->string('hora', 5);
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
        Schema::dropIfExists('curso_dictados');
    }
}
