<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id('idrecibos');
            $table->string('descripcion');
            $table->unsignedBigInteger('idvehiculos');
            $table->unsignedBigInteger('idempresas');
            $table->unsignedBigInteger('idconductor');
            $table->unsignedBigInteger('idnacionalidad');
            $table->unsignedBigInteger('idusuario');
            $table->foreign('idvehiculos')->references('idvehiculos')->on('vehiculos');
            $table->foreign('idempresas')->references('idempresas')->on('empresas');
            $table->foreign('idconductor')->references('idconductor')->on('conductores');
            $table->foreign('idnacionalidad')->references('idnacionalidad')->on('nacionalidades');
            $table->foreign('idusuario')->references('idusuario')->on('usuarios');
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
        Schema::dropIfExists('recibos');
    }
}
