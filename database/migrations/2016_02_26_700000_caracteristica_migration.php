<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CaracteristicaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristica', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');

            $table->integer('factor_id')->unsigned();
            $table->foreign('factor_id')->references('id')->on('factor')->onDelete('cascade');

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
        Schema::drop('caracteristica');
    }
}
