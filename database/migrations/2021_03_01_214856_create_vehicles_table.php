<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 100);//marca
            $table->string('model', 50);//modelo
            $table->string('color', 50);//color
            $table->string('serialNumber', 50);//no_serie
            $table->string('carRegistration', 12);//no_placas
            $table->tinyInteger('numberOfDoors');//no_puertas
            $table->tinyInteger('numberOfSeats');//no_asientos
            $table->integer('mileage');//kilometraje
            $table->tinyInteger('cylinderCapacity');//cilindraje
            //precio_venta
            //precio_compra
            $table->text('description');//descripción
            $table->string('comment')->nullable();//comentario
            $table->tinyInteger('available')->default(1);//disponible
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
        Schema::dropIfExists('vehicles');
    }
}
