<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vehicles = [
            "x7" => 2,
            "M5" => 2,
            "Z4" => 2,
            "1-Series M Coupe" => 2,
            "M3 E92" => 2,
            "x1" => 2,
            "M3" => 2,
            "W203" => 1,
            "W204" => 1,
            "W247" => 1,
            "W210" => 1,
            "A4" => 3,
            "A8" => 3,
            "A3" => 3,
            "A1" => 3,
            "Q2" => 3,
            "R8" => 3,
            "TT" => 3,
            "Fabia" => 4,
            "Rapid" => 4,
            "Octavia" => 4 ,
            "Kodiaq" => 4,
            "Karoq" => 4,
            "Megane" => 5,
            "Duster" => 5,
            "Kadjar" => 5,
            "Captur" => 5,
            "Clio" => 5,
            "Corsa A" => 6,
            "Corsa B" => 6,
            "Golf" => 7,
            "Passat" => 7,
            "Santana" => 7,
            "Tiguan" => 7,
            "Touareg" => 7,
            "Ducato" => 8,
            "Linea" => 8,
            "Punto" => 8,
            "Prius" => 9,
            "Yaris" => 9,
            "Fiesta" => 10,
            "Ranger" => 10,
            "Cherokee" => 11,
            "Sedan" => 12
        ];

        for($i = 0; $i < 50;$i++){
            $rand_number = rand(1, 12);
            DB::table('auto')->insert([
                "naziv" => array_keys($vehicles)[$rand_number],
                "proizvodacID" => array_values($vehicles)[$rand_number],
                "registracija" => chr(rand(65,90)) . rand(1,99) . "-" . chr(rand(65,90)) . "-" . rand(1,999),
                "created_at" => date("Y-m-d") . ' ' . date("h:i:s"),
                "updated_at" => date("Y-m-d") . ' ' . date("h:i:s"),
            ]);
        }
    }
}
