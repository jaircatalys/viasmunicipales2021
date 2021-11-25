<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id('idconductor');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('ci');
            $table->unsignedBigInteger('idnacionalidad');
            $table->unsignedBigInteger('idvehiculos');
            $table->foreign('idnacionalidad')->references('idnacionalidad')->on('nacionalidades');
            $table->foreign('idvehiculos')->references('idvehiculos')->on('vehiculos');
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
        Schema::dropIfExists('conductores');
    }
}
