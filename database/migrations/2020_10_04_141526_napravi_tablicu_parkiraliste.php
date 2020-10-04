<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuParkiraliste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkiraliste', function (Blueprint $table) {
            $table->id();
            $table->string('naziv', 50);
            $table->unsignedBigInteger('lokacija_id');

            $table->foreign('lokacija_id')->references('id')->on('lokacija');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkiraliste');
    }
}
