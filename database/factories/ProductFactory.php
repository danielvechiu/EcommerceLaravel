<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->unique()->slug(2),
        'details' => $faker->text,
        'category' => $faker->unique()->slug(2),
        'new-collection' => $faker->boolean(),
        'price' => $faker->randomNumber(3),
        'quantity' => $faker->randomNumber(1),
        'description' => $faker->text,
    ];
});
