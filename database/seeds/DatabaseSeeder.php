<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(UserTableSeeder::class);
        $this->call(PlacesTableseeder::class);
//        $this->call(LessonTableSeeder::class);
//        $this->call(TagsTableSeeder::class);
//        $this->call(LessonsTagsTableSeeder::class);
    }
}
