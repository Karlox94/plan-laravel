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

            $table->integer('noConformidad_id')->unsigned();
            $table->foreign('noConformidad_id')->references('id')->on('noConformidad')->onDelete('cascade');

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
