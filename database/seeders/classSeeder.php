<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        $lectid = DB::table('lectures')->pluck('lectid');
        $courseid = DB::table('courses')->pluck('courseid');
        
        for($i = 1; $i <= 50; $i++)
        {
    		DB::table('courseclasses')->insert([
    			'classid' =>  $faker->numerify('C#####'),
                'courseid' => $faker->randomElement($courseid),
                'lectid' => $faker->randomElement($lectid),
                'day' => $faker->dayOfWeek()
    		]);
 
    	}
    }
}
