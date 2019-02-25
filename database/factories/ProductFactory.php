<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => $faker->imageUrl($width = 1500, $height = 480),
        'content' => $faker->text(500),
        'description' => $faker->text(120),
        'price' => $faker->numberBetween($min = 300, $max = 1000),
        'available' => $faker->numberBetween($min = 0, $max = 10),
        'category' => $faker->name,
       	'locale' => $faker->realText(rand(10,20))
    ];
});
