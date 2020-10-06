<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZupanijaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $zupanije = ['','Unsko-sanska županija','Županija Posavska','Tuzlanska županija','Zeničko-dobojska županija','Bosansko-podrinjska županija Goražde','Županija Središnja Bosna','Hercegovačko-neretvanska županija','Županija zapadnohercegovačka','Sarajevska županija','Hercebgosanska županija'];
        
        for ($i = 1; $i < count($zupanije); $i++){
            DB::table('zupanija')->insert([
                'naziv' => $zupanije[$i],
                'id' => "$i"
            ]);
        }
    }
}
