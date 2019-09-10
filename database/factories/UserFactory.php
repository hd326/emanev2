<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Anime::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'slug' => $faker->sentence,
        'genre_id' => rand(1, 13),
        'air_date' => $faker->date,
        'sypnosis' => $faker->sentence,
        'image_id' => function () {
            return factory('App\AnimeImages')->create()->id;
        }
    ];
});

$factory->define(App\Episode::class, function (Faker $faker) {
    static $number = 1;
    return [
        'anime_id' => function () {
            return factory('App\Anime')->create()->id;  
        },
        'name' => $faker->sentence,
        'slug' => $faker->sentence,
        'air_date' => $faker->date,
        'sypnosis' => $faker->sentence,
        'image_id' => function () {
            return factory('App\EpisodeImages')->create()->id;
        }
    ];
});

$factory->define(App\Rating::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\User')->create()->id;
        },
        'episode_id' => rand(1, 360),
        'rating' => rand(1, 5)
    ];
});

$factory->define(App\AnimeImages::class, function (Faker $faker) {
    return [
        'src' => '/images/default.jpg',
        'mime_type' => $faker->word,
        'title' => $faker->word,
        'alt' => $faker->word,
        'description' => $faker->word,
    ];
});

$factory->define(App\EpisodeImages::class, function (Faker $faker) {
    return [
        'src' => '/images/default.jpg',
        'mime_type' => $faker->word,
        'title' => $faker->word,
        'alt' => $faker->word,
        'description' => $faker->word,
    ];
});

$factory->define(App\EpisodeImages::class, function (Faker $faker) {
    return [
        'anime_id' => rand(1,156),
        'genre_id' => rand(1,13)
    ];
});





