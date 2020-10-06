<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OpcinaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $opcine = ['Mostar','Ljubuški','Orašje','Čitluk','Centar Sarajevo','Tuzla','Zenica','Zavidovići','Bihać','Livno'];

        for ($i = 1; $i < count($opcine); $i++){
            DB::table('opcina')->insert([
                'id' => "$i",
                'naziv' => $opcine[$i],
                'zupanija_id' => rand(1,10),
            ]);
        }
    }
}
