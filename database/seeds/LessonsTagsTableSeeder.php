<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonsTagsTableSeeder extends Seeder
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
            DB::table('lesson_tag')->insert([
                'lesson_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 7, 8, 9, 20, 21, 22, 23]),
                'tag_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 7, 8, 9, 20, 21, 22, 23]),

            ]);
        }
    }
}
