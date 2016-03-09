<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcesoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proceso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            $table->integer('lider_id')->unsigned();
            $table->foreign('lider_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->integer('auditor_id')->unsigned();
            $table->foreign('auditor_id')->references('id')->on('usuario')->onDelete('cascade');

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
        Schema::drop('proceso');
    }
}
