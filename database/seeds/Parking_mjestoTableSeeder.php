<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Parking_mjestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pm = ['P-1','P-2','P-3','P-4','P-5'];
        $status = ['slobodno','zauzeto'];
        $vrsta = ['automobil','invalidsko','biciklo',];

        for($i = 1;$i < 30;$i++){
            DB::table('parking_mjesto')->insert([
                'id' => "$i",
                'naziv' => $pm[rand(0,4)],
                'status' => $status[rand(0,1)],
                'vrsta' => $vrsta[rand(0,2)],
                'parkiraliste_id' => rand(1, 15),
                'sektor_id' => rand(1, 5)
            ]);
        }
    }
}
