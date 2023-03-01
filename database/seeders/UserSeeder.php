<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); //initialize faker

        /* create 5 fake user accounts */
        foreach(range(1,5) as $index) {
            User::insert([
                'name' => $faker -> name,
                'email' => $faker -> email,
                'password' => $faker-> password(6),
            ]);
        }
    }
}
