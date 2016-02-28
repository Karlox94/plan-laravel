<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('cedula')->unique();;
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();

            $table->integer('perfil_id')->unsigned();
            $table->foreign('perfil_id')->references('id')->on('perfil')->onDelete('cascade');

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
        Schema::drop('usuario');
    }
}
