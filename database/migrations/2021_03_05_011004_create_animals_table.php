<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250);
            $table->string('species', 250);
            $table->string('family', 250);
            $table->string('inhabit', 250);
            $table->string('color', 250);
            $table->tinyInteger('legs');
            $table->string('feeding', 250);
            $table->string('size', 250);
            $table->string('country', 250);
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
        Schema::dropIfExists('animals');
    }
}
