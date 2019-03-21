<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PatientBiodataSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(0,3) as $index){
            DB::table('patients_biodata')->insert([
                'id_patients' => $index,
                'id_blood_type' => "1",
                'name' => $faker->name,
                'birth_date' => $faker->date,
                'birth_place' => $faker->name,
                'pregnancy_count' => $faker->randomDigit,
                
                
        
            ]);
        }
    }
}
