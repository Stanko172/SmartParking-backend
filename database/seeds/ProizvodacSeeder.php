<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProizvodacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manufacturers = ['Mercedes', 'BMW', 'Audi', 'Škoda', 'Renault', 'Opel', 'VW', 'Fiat', 'Toyota', 'Ford', 'Jeep', 'KIA'];

        for ($i = 0; $i < count($manufacturers); $i++){
            DB::table('proizvodac')->insert([
                'naziv' => $manufacturers[$i],
            ]);

        }
    }
}
