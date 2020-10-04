<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuLokacija extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokacija', function (Blueprint $table) {
            $table->id();
            $table->string('naziv', 50);
            $table->unsignedBigInteger('grad_id');

            $table->foreign('grad_id')->references('id')->on('grad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokacija');
    }
}
