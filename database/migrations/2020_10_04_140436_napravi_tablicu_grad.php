<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuGrad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grad', function (Blueprint $table) {
            $table->id();
            $table->string('naziv', 50);
            $table->unsignedBigInteger('opcina_id');

            $table->foreign('opcina_id')->references('id')->on('opcina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grad');
    }
}
