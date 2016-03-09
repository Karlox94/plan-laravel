<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CorrecionMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correccion', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->date('fechaEjecucion');

            $table->integer('falencia_id')->unsigned();
            $table->foreign('falencia_id')->references('id')->on('falencia')->onDelete('cascade');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

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
        Schema::drop('correccion');
    }
}
