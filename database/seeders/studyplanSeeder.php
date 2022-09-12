<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class studyplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $studentid = DB::table('students')->pluck('studentid');
        $classid = DB::table('courseclasses')->pluck('classid');

        for($i = 1; $i <= 50; $i++)
        {
    		DB::table('studyplans')->insert([
    			'planid' =>  $faker->numerify('CP#####'),
                'studentid' => $faker->randomElement($studentid),
                'classid' => $faker->randomElement($classid),
    		]);
 
    	}
    }
}
