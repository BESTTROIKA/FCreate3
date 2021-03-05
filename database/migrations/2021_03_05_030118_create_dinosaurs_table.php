<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDinosaursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dinosaurs', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->double('size', 8, 2);
            $table->string('feeding', 100);
            $table->string('period', 100);
            $table->string('clasification', 100);
            $table->double('weight', 8,2);
            $table->string('reproduction', 100);
            $table->string('inhabit', 100);
            $table->string('region', 250);
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
        Schema::dropIfExists('dinosaurs');
    }
}
