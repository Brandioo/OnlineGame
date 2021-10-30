<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class KindSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = FAKER::create();
        DB::table('kinds')->insert([
            'name' => $this->faker->randomElement([
                "SpiderMan",
                "SuperMan",
                "SpyGirl",
                "BadBoy"
            ]),
            'health_points' => $this->faker->numberBetween(1,100),
            'strength_points' => $this->faker->numberBetween(1,500),
            'money' => $this->faker->numberBetween(100,10000),
            'items_possessed' => $this->faker->randomDigit(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
