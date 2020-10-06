<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grad = ['','Mostar','Ljubuški','Orašje','Međugorje','Sarajevo','Tuzla','Zenica','Čitluk','Tolisa','Donja Mahala','Zavidovići','Bihać','Prnjavor','Livno'];

        for ($i = 1; $i < count($grad); $i++){
            DB::table('grad')->insert([
                'id' => "$i",
                'naziv' => $grad[$i],
                'opcina_id' => rand(1,9),
            ]);
        }
    }
}
