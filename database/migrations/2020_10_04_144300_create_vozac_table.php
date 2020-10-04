<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVozacTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vozac', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('korisnikID');
            $table->unsignedBigInteger('autoID');

            $table->foreign('korisnikID')->references('id')->on('users');
            $table->foreign('autoID')->references('id')->on('auto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vozac');
    }
}
