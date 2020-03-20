<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegioCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegio__cursos', function (Blueprint $table) {
            $table->string('DNI', 8);
            $table->string('IDCurso', 3);
            $table->unique(['DNI', 'IDCurso']);
            $table->foreign('DNI')->references('DNI')->on('colegios')->onDelete('cascade');
            $table->foreign('IDCurso')->references('IDCurso')->on('curso_dictados')->onDelete('cascade');
            $table->float('primerBimestre', 4, 2);
            $table->float('segundoBimestre', 4, 2);
            $table->float('tercerBimestre', 4, 2);
            $table->float('cuartoBimestre', 4, 2);
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
        Schema::dropIfExists('colegio__cursos');
    }
}
