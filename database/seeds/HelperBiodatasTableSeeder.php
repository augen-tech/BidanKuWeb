<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HelperBiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(0,3) as $index){
            DB::table('helper_biodatas')->insert([
                'helper_id' => $index+1,
                'name' => $faker->name,
                'birth_date' => $faker->dateTime,
                'birth_place' => $faker->company,
            ]);
        }
    }
}
