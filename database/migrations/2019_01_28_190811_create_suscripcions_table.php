<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscripcions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_recibe')->nullable();
            $table->string('pais')->nullable();
            $table->string('estado')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('direccion')->nullable();
            $table->string('observacion')->nullable();
            $table->string('jovenes')->nullable();
            $table->string('adultos')->nullable();
            $table->string('ninos')->nullable();
            $table->string('puerta')->nullable();
            $table->timestamp('fecha_pago')->nullable();
            $table->timestamp('fecha_inicio')->nullable();
            $table->timestamp('fecha_corte')->nullable();
            $table->string('tiempo')->nullable();
            $table->string('numero_suscripcion')->nullable();
            $table->string('numero_factura')->nullable();

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->integer('titular_id')->unsigned()->nullable();
            $table->foreign('titular_id')
                  ->references('id')
                  ->on('titulars')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('suscripcions');
    }
}
