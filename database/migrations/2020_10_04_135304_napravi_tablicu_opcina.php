<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuOpcina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcina', function (Blueprint $table) {
            $table->id();
            $table->string('naziv', 50);
            $table->unsignedBigInteger('zupanija_id');

            $table->foreign('zupanija_id')->references('id')->on('zupanija');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opcina');
    }
}
