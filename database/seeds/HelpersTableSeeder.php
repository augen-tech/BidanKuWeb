<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HelpersTableSeeder extends Seeder
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
            DB::table('helpers')->insert([
                'email' => $faker->email,
                'phone_number' => $faker->randomNumber(5, $strict = false),
                'password' => "password"
            ]);
        }
    }
}
