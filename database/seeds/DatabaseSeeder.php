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
    }
}
