<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->words(3, true);
    $categories = App\Category::all()->pluck('id')->toArray();
    //dd($categories);

    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'img' => $faker->randomElement(['https://loremflickr.com/320/240', null]),
        'price' => $faker->randomFloat(2, 1, 10000),
        'recomended' => $faker->boolean(),
        'category_id' => $faker->randomElement($categories),
    ];
});
