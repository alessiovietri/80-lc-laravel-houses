<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\House;

// Helpers
use Faker\Generator as Faker;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $housesData = [
            [
                'address' => 'Via Roma, 1, Roma',
                'sold' => true
            ]
        ];

        foreach ($housesData as $singleHouseData) {
            $house = new House();
            $house->address = $singleHouseData['address'];
            $house->sold = $singleHouseData['sold'];
            $house->save();
        }

        for ($i = 0; $i < 100; $i++) {
            $house = new House();
            $house->address = $faker->address();
            $house->sold = $faker->numberBetween(0, 1);
            $house->save();
        }
    }
}
