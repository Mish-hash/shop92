<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Review::class, function (Faker $faker) {
    $user = App\User::all()->pluck('id')->toArray();
    $product = App\Product::all()->pluck('id')->toArray();
    return [
        'comment' => $faker->sentence($nbWords = 15, $variableNbWords = true),
        'user_id' => $faker->randomElement($user),
        'product_id' => $faker->randomElement($product),
    ];
});
