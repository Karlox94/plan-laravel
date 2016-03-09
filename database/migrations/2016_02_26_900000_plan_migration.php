<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlanMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->date('fechaAnalisis');
            $table->integer('añoEvaluacion');

            $table->integer('programa_id')->unsigned()->nulleable();
            $table->foreign('programa_id')->references('id')->on('programa')->onDelete('cascade');
            $table->integer('proceso_id')->unsigned()->nulleable();
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
        Schema::drop('plan');
    }
}
