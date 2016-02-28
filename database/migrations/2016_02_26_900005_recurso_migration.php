<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecursoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->text('fuente');
            $table->integer('costo');

            $table->integer('actividad_id')->unsigned();
            $table->foreign('actividad_id')->references('id')->on('actividad')->onDelete('cascade');

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
        Schema::drop('recurso');
    }
}
