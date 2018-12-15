<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    return [
        "title"=>$faker->sentence(),
        "description" => $faker->paragraph(),
        "is_published"=> rand(0,1)
    ];
});
