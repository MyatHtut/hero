<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PlacesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 30) as $index) {
            DB::table('places')->insert([
                'name'       => $faker->name,
                'lat'        => $faker->bankAccountNumber,
                'lon'        => $faker->bankAccountNumber,
                'address1'   => $faker->streetAddress,
                'city'       => $faker->city,
                'state'      => $faker->stateAbbr,
                'zip'        => rand(100, 30),
                'website'    => $faker->url,
                'phone'      => $faker->phoneNumber,

            ]);

        }
    }
}
