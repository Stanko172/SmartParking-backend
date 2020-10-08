<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SektorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sektor = ['','A','B','C','D','E'];

        for($i = 1;$i < count($sektor);$i++){
            DB::table('sektor')->insert([
                'id' => "$i",
                'naziv' => $sektor[$i],
            ]);
        }
    }
}
