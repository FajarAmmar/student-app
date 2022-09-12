<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'id' => '1',
            'name' => 'admin',
            'email' => 'admin@email.com',
            'email_verified_at' => now(),
            'usertype' => '1',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
           ]);

           \App\Models\User::factory()->create([
            'id' => '2',
            'name' => 'student',
            'email' => 'student@email.com',
            'email_verified_at' => now(),
            'usertype' => '0',
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
           ]);

        \App\Models\User::factory(10)->create();

    }
}
