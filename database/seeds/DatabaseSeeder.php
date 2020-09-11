<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $movies = [
            ['title' => 'Zielona mila', 'alt' => 'Zielona mila poster', 'director_id' => 1],
            ['title' => 'Skazani na Shawshank', 'alt' => 'Skazani na Shawshank poster', 'director_id' => 1],
            ['title' => 'Forrest Gump', 'alt' => 'Forrest Gump poster', 'director_id' => 2],
            ['title' => 'Leon Zawodowiec', 'alt' => 'Leon Zawodowiec poster', 'director_id' => 3],
            ['title' => 'Matrix', 'alt' => 'Matrix poster', 'director_id' => 4]
        ];

        $directors = [
            ['name' => 'Frank Darabont'],
            ['name' => 'Robert Zemeckis'],
            ['name' => 'Luc Besson'],
            ['name' => 'Lilly Wachowski']
        ];

        DB::table('directors')->insert($directors);

        DB::table('movies')->insert($movies);
    }
}
