<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FalenciaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('falencia', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->text('causaRaiz');   
            $table->text('metodologia');

            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plan')->onDelete('cascade');

            $table->integer('origen_id')->unsigned();
            $table->foreign('origen_id')->references('id')->on('origen')->onDelete('cascade');

            $table->integer('accion_id')->unsigned();
            $table->foreign('accion_id')->references('id')->on('accion')->onDelete('cascade');

            $table->integer('caracteristica_id')->unsigned()->nullable();
            $table->foreign('caracteristica_id')->references('id')->on('caracteristica')->onDelete('cascade');

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
        Schema::drop('falencia');
    }
}
