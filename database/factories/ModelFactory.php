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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'niu' => $faker->unique()->regexify('[1-9][0-9]{6}'),
        'name' => $faker->unique()->name,
        'nickname' => $faker->unique()->userName,
        'description' => $faker->text(200),
        'email' => $faker->unique()->safeEmail,
        'avatar' => $faker->imageUrl(100,100),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
