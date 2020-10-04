<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuRezervacija extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervacija', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parking_mjesto_id');
            $table->unsignedBigInteger('vozac_id');
            $table->float('cijena', 2, 2);
            $table->dateTime('vrijeme_rezervacije', 0);

            $table->foreign('parking_mjesto_id')->references('id')->on('parking_mjesto');
            $table->foreign('vozac_id')->references('id')->on('vozac');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezervacija');
    }
}
