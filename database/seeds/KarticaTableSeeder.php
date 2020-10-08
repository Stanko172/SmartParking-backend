<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KarticaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kartica = ['MasterCard', 'Visa'];

        for($i = 1;$i < 20;$i++){
            DB::table('kartica')->insert([
                'id' => "$i",
                'broj' => rand(1000000000000000,9999999999999999),
                'vrsta' => $kartica[rand(0,1)],
                'sigurnosniBroj' => rand(100,999),
                'datumIsteka' => rand(0101, 9999),
                'korisnikID' => rand(1, 20)
            ]);
        }
    }
}
