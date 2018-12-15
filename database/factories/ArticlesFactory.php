<?php

use Faker\Generator as Faker;
use App\Models\Category;

$factory->define(\App\Models\Article::class, function (Faker $faker) {
    $categories = Category::pluck('id',"id")->toArray();
    return [
        "title"=>$faker->sentence(),
        "description" => $faker->paragraph(),
        "is_published"=> rand(0,1),
        'category_id' => array_rand($categories,1)
    ];
});
