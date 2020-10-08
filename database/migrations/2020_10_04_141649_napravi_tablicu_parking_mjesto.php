<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NapraviTablicuParkingMjesto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_mjesto', function (Blueprint $table) {
            $table->id();
            $table->string('naziv', 50);

            //$table->boolean('status')->default(false); - vratiti nakon tesnog seedera :)
            $table->string('status', 50);

            // 1 - obicno pm, 2 - invalidsko pm
            //$table->enum('vrsta', ['1', '2']); - vratiti nakon tesnog seedera :)
            $table->string('vrsta', 50);
            
            $table->unsignedBigInteger('parkiraliste_id');
            $table->unsignedBigInteger('sektor_id');

            $table->foreign('parkiraliste_id')->references('id')->on('parkiraliste');
            $table->foreign('sektor_id')->references('id')->on('sektor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parking_mjesto');
    }
}
