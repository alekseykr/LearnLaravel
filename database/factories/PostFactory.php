<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "title"=>$faker->name(),
        "discription"=>$faker->text(50),
        "category_id"=>rand(1,2)
    ];
});
