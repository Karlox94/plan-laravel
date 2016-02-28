<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoConformidadMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noConformidad', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('origen');
            $table->string('tipoAccion');
            $table->text('causaRaiz');   
            $table->text('metodologia');

            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('plan')->onDelete('cascade');

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
        Schema::drop('noConformidad');
    }
}
