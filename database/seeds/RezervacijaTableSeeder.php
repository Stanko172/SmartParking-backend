<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RezervacijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 21; $i++){
            DB::table('rezervacija')->insert([
                'id' => "$i",
                'parking_mjesto_id' => rand(1,29),
                'vozac_id' => rand(1,19),
                'cijena' => $faker->randomFloat($decimal = 2, $min = 0, $max = 50.00),
                'vrijeme_rezervacije' => $faker->dateTime()->format('Y-m-d h:i:s'),
            ]);
        }
    }
}
