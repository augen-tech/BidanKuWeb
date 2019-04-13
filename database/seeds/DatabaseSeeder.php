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
        $this->call(BloodTypesTableSeeder::class);
        $this->call(HelpersTableSeeder::class);
        $this->call(HelperBiodatasTableSeeder::class);

        // $this->call(PatientsTableSeeder::class);

    }
}
