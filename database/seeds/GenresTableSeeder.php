<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::table
        App\Genre::create([
            'id' => 1,
            'name' => 'Summer Simulcasts',
        ]);
        App\Genre::create([
            'id' => 2,
            'name' => 'Just Updated',
        ]);
        App\Genre::create([
            'id' => 3,
            'name' => 'Continuing Simulcasts',
        ]);
        App\Genre::create([
            'id' => 4,
            'name' => 'Popular',
        ]);
        App\Genre::create([
            'id' => 5,
            'name' => 'Sports',
        ]);
        App\Genre::create([
            'id' => 6,
            'name' => 'Friendship',
        ]);
        App\Genre::create([
            'id' => 7,
            'name' => 'Shonen',
        ]);
        App\Genre::create([
            'id' => 8,
            'name' => 'Vintage',
        ]);
        App\Genre::create([
            'id' => 9,
            'name' => 'Self Improvement',
        ]);
        App\Genre::create([
            'id' => 10,
            'name' => 'Quiet Life',
        ]);
        App\Genre::create([
            'id' => 11,
            'name' => 'Music',
        ]);
        App\Genre::create([
            'id' => 12,
            'name' => 'Spooky',
        ]);
        App\Genre::create([
            'id' => 13,
            'name' => '90s',
        ]);
        
    }
}
