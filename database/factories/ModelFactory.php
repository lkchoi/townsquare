<?php

use Illuminate\Support\Str;

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
$factory->define(App\Article::class, function(Faker\Generator $faker) {
    return [
        'title' => Str::title($faker->words(5, true)),
        'author' => $faker->name(),
        'subheader' => $faker->sentence(),
        'abstract' => $faker->paragraph(),
        'content' => $faker->paragraphs(10, true),
    ];
});
