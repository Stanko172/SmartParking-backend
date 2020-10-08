<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkiralisteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parkiraliste = ['','SUM','Babovac','IV Ulica:Na lijevoj strani kolnika','Podbrdo','Parking 1','Parking 2','Parking 3','Parking 4','Parking 5','Parking 6','Parking 7','Parking 8','Parking 9','Parking 10','Parking 11'];

        for($i = 1; $i < count($parkiraliste); $i++){
            DB::table('parkiraliste')->insert([
                'id' => $i,
                'naziv' => $parkiraliste[$i],
                'lokacija_id' => rand(1, 25),
            ]);
        }
    }
}
