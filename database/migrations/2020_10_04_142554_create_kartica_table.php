<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKarticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartica', function (Blueprint $table) {
            $table->id();
            $table->char('broj', 16);
            $table->enum('vrsta', ['MasterCard', 'Visa']);
            $table->char('sigurnosniBroj', 3);
            $table->char('datumIsteka', 5);

            $table->unsignedBigInteger('korisnikID');

            $table->foreign('korisnikID')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kartica');
    }
}
