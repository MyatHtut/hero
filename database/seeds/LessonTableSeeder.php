<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LessonTableSeeder extends Seeder
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
            DB::table('lessons')->insert([
                'name' => $faker->title(10),
                'body' => $faker->paragraph(4),

            ]);
        }
    }
}
