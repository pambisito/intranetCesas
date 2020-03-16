<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('DNI');
            $table->primary('DNI');
            $table->string('password');
            $table->rememberToken();
            $table->string('apellidoPaterno', 30);
            $table->string('apellidoMaterno', 30);
            $table->string('nombres', 40);
            $table->date('fechaNacimiento');
            $table->char('sexo', 1);
            $table->string('direccion',100);
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('telefono')->nullable();
            $table->integer('celular')->nullable();
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
        Schema::dropIfExists('users');
    }
}
