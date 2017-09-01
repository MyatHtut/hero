<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
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
            DB::table('users')->insert([
                'name' => $faker->title(10),
                'password' => $faker->password(6),
                'email' => $faker->email(10),
                'gender' => $faker->randomElement(['male', 'female']),
                'bio' => $faker->sentence(100),
                'active' => $index === 0 ? true : rand(0, 1),
                'location' => rand(0, 1) ? "{$faker->city}, {$faker->state}" : null,

            ]);
        }
    }
}
