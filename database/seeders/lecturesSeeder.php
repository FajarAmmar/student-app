<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class lecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 15; $i++)
        {
    		DB::table('lectures')->insert([
    			'lectid' =>  $faker->numerify('LC####'),
                'name' =>  $faker->name(),
    		]);
    }
}
}
