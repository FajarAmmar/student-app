<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class coursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        $majorid = DB::table('majors')->pluck('majorid');
        
        for($i = 1; $i <= 20; $i++)
        {
    		DB::table('courses')->insert([
    			'courseid' =>  $faker->numerify('U####'),
                'name' =>  $faker->lexify('COURSE-?????'),
                'semester' => $faker->randomDigitNot(0,9),
                'majorid' => $faker->randomElement($majorid),
    		]);
 
    	}
    }
}
