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
                'datumIsteka' => '' . rand(1, 12) . '/' . rand(20, 30),
                'korisnikID' => rand(1, 20)
            ]);
        }
    }
}
