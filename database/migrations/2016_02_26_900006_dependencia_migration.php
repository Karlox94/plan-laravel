<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DependenciaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependencia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            $table->integer('proceso_id')->unsigned();
            $table->foreign('proceso_id')->references('id')->on('proceso')->onDelete('cascade');

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
        Schema::drop('dependencia');
    }
}
