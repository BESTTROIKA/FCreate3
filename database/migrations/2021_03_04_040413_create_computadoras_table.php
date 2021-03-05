<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('model', 255);
            $table->tinyInteger('inch');
            $table->string('brand', 255);
            $table->string('operativeSystem', 255);
            $table->tinyInteger('version');
            $table->string('capacity', 250);
            $table->tinyInteger('Memory');
            $table->string('processor', 50);
            $table->tinyInteger('core');
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
        Schema::dropIfExists('computadoras');
    }
}
