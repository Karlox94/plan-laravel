<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AvanceMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avance', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('evidencia'); 

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
        Schema::drop('avance');
    }
}
