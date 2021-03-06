<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Tag::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Models\Series::class, function (Faker\Generator $faker) {

    return [
        'user_id' => rand(1,10),
        'title' => $faker->text(20),
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Models\Video::class, function (Faker\Generator $faker) {

    $series_id = \App\Models\Series::pluck('id')->push(null)->random();

    return [
        'user_id' => rand(1,10),
        'series_id' => $series_id,
        'title' => $faker->text(20),
        'description' => $faker->paragraph,
        'youtube_id' => md5($faker->text(10)),
    ];
});

$factory->define(App\Models\Blog::class, function (Faker\Generator $faker) {

   $series_id = \App\Models\Series::pluck('id')->push(null)->random();

    return [
        'user_id' => rand(1,10),
        'series_id' => $series_id,
        'title' => $faker->text(20),
        'content' => $faker->paragraph,
    ];
});