<?php

use Illuminate\Database\Seeder;

class BloodTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $blood_type = array("A", "B", "AB", "O");
        foreach(range(0,3) as $index){
            DB::table('blood_types')->insert([
                'type' => $blood_type[$index]
                
            ]);
        }
    }
}
