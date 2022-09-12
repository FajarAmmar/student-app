<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class announcementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i = 1; $i <= 5; $i++)
        {
    		DB::table('announcements')->insert([
    			'annid' =>  $faker->numerify('ANN-###'),
                'name' =>  $faker->word(),
                'announ' =>  $faker->sentence(5),
    		]);
    }
}
}