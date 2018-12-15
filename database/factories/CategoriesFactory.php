<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        ['title'=>"Web development"],
        ['title'=>"Mobile"],
        ['title'=>"Database"]
    ];
});
