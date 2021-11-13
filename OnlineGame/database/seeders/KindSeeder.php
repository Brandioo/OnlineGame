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

        $data = [];
        $kind_names = [
            "SpiderMan",
            "SuperMan",
            "SpyGirl",
            "BadBoy"
        ];

        foreach($kind_names as $kind_name){

            $data[] = [
                'name' => $kind_name,
                'current_health_points' => $this->faker->numberBetween(1,500),
                'max_health_points' => $this->faker->numberBetween(1,5000),
                'current_strength_points' => $this->faker->numberBetween(1,500),
                'current_money' => $this->faker->numberBetween(100,10000),
                'items_possessed' => $this->faker->randomDigit(),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        DB::table('kinds')->insert($data);
    }
}
