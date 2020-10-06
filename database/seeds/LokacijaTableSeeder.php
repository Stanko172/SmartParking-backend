<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokacijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lokacija = ['','Strelčevina','Babovac','IV ulica','Podbrdo','Stolačka','Kulina Bana','Sarajevska','Kralja Tvrtka 2','Vladimira Nazora','Berlinska','Tržnička','Banjalučka','Svetog Save','Zagrebačka','Stjepana Radića','I ulica','Dolina','Dubrovačka','Travnička cesta','Kardinala Stepinca','Kninska','Gorička','V ulica','Dolina','Majevička'];

        for ($i = 1; $i < count($lokacija); $i++){
            DB::table('lokacija')->insert([
                'id' => "$i",
                'naziv' => $lokacija[$i],
                'grad_id' => rand(1,14),
            ]);
        }
    }
}
