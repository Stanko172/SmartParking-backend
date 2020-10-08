<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VozacTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i < 20;$i++){
            DB::table('vozac')->insert([
                'id' => "$i",
                'korisnikID' => rand(1, 20),
                'autoID' => rand(1, 50),
            ]);
        }
    }
}
