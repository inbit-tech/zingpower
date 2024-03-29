<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\News::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'imgurl' => 'http://placeimg.com/640/480/any',
        'summary' => $faker->paragraph,
        'body' => $faker->paragraph,
        'updated_at' => $faker->dateTime
    ];
});
