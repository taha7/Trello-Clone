<?php

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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt('123456'), // secret
        'api_token' => Str::random(60),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Models\Project::class, function (Faker $faker) {
    return [
        'group_id' => function () {
            return factory('App\Models\Group')->create()->id;
        },
        'title' => $faker->word,
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Models\Group::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory('App\Models\User')->create()->id;
        },
        'title' => $faker->word,
    ];
});

$factory->define(App\Models\UserProject::class, function (Faker $faker) {
    return [
        'role' => 'admin',
    ];
});
