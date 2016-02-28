   <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActividadMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('meta');
            $table->string('indicador');
            $table->date('fechaInicio');
            $table->date('fechaFinal');
            $table->text('evidencia');
            $table->integer('porcentaje');
            $table->string('estadoAccion');
            $table->text('observacion');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->integer('noConformidad_id')->unsigned()->nullable();
            $table->foreign('noConformidad_id')->references('id')->on('noConformidad')->onDelete('cascade');

            $table->integer('debilidad_id')->unsigned()->nullable();
            $table->foreign('debilidad_id')->references('id')->on('debilidad')->onDelete('cascade');

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
        Schema::drop('actividad');
    }
}
