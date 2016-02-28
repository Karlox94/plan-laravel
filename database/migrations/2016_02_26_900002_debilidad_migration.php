<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DebilidadMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debilidad', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('origen');
            $table->string('tipoAccion');
            $table->text('causaRaiz');   
            $table->text('metodologia'); 

            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plan')->onDelete('cascade');

            $table->integer('caracteristica_id')->unsigned();
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
        Schema::drop('debilidad');
    }
}
