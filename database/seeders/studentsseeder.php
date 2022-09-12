<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class studentsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majorid = DB::table('majors')->pluck('majorid');
        $userid = DB::table('users')->pluck('id');

        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 10; $i++)
        {
    		DB::table('students')->insert([
    			'studentid' =>  $faker->numerify('STD-#####'),
                'name' =>  $faker->name(),
                'semester' => $faker->randomDigitNot(0,9),
                'userid' => $faker->randomElement($userid),
                'majorid' => $faker->randomElement($majorid),
                'birth' => $faker->date('Y_m_d'),
                'address' => $faker->address()
    		]);
 
    	}

        
    }
}
