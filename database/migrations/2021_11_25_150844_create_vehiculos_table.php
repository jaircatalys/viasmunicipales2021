<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('idvehiculos');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->string('tipo');
            $table->string('placa');
            $table->unsignedBigInteger('idtiposdecargas');
            $table->unsignedBigInteger('idtiposdevehiculos');
            $table->foreign('idtiposdecargas')->references('idtiposdecargas')->on('tiposdecargas');
            $table->foreign('idtiposdevehiculos')->references('idtiposdevehiculos')->on('tiposdevehiculos');
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
        Schema::dropIfExists('vehiculos');
    }
}
