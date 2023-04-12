<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i = 0; $i < 10; $i++) {
            DB::table('guests')->insert([
                'name' => $faker->name(),
                'address' => $faker->address(),
                'phone_number' => $faker->phoneNumber(),
                'note' => $faker->sentence(),
            ]);
        }
    }
}
