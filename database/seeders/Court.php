<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Court extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            DB::table('courts')->insert([
                'court_type_id' => $faker->numberBetween(1, 10),
                'name' => $faker->name,
                'price' => $faker->numberBetween(100000, 1000000),
            ]);
        }
    }
}
