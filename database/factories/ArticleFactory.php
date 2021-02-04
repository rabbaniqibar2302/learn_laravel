<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => \Str::slug($faker->sentence),
        'content' => $faker->paragraph(10),
    ];
});
