<?php

use Illuminate\Database\Seeder;

class AnimeImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\AnimeImages::create([
            'anime_id' => 1,
            'src' => '/images/animes/dr-stone.jpg',
        ]);

        App\AnimeImages::create([
            'anime_id' => 2,
            'src' => '/images/animes/is-it-wrong.jpg',
        ]);

        App\AnimeImages::create([
            'anime_id' => 3,
            'src' => '/images/animes/fire-force.jpg',
        ]);

        App\AnimeImages::create([
            'anime_id' => 4,
            'src' => '/images/animes/isekai-cheat-magician.jpg',
        ]);

        App\AnimeImages::create([
            'anime_id' => 5,
            'src' => '/images/animes/abandoned-sacred-beasts.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 6,
            'src' => '/images/animes/symphogear.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 7,
            'src' => '/images/animes/granbelm.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 8,
            'src' => '/images/animes/if-its-for-my-daughter.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 9,
            'src' => '/images/animes/magical-sempai.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 10,
            'src' => '/images/animes/are-you-lost.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 11,
            'src' => '/images/animes/magimogi-rurumo.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 12,
            'src' => '/images/animes/hakata-mentai.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 13,
            'src' => '/images/animes/try-knights.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 14,
            'src' => '/images/animes/starmyu.jpg',
        ]);
        App\AnimeImages::create([
            'anime_id' => 15,
            'src' => '/images/animes/yamishibai.jpg',
        ]);
    }
}
