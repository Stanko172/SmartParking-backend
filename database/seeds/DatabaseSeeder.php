<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ZupanijaTableSeeder::class);
        $this->call(OpcinaTableSeeder::class);
        $this->call(GradTableSeeder::class);
        $this->call(LokacijaTableSeeder::class);
        $this->call(ProizvodacSeeder::class);
        $this->call(ParkiralisteTableSeeder::class);
        $this->call(AutoSeeder::class);
        $this->call(SektorTableSeeder::class);
        $this->call(Parking_mjestoTableSeeder::class);
        $this->call(KarticaTableSeeder::class);
        $this->call(VozacTableSeeder::class);
        $this->call(RezervacijaTableSeeder::class);
    }
}
