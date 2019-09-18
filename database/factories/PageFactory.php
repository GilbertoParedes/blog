<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cms\Pages\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'title' => $faker->name,
        'description' => $faker->randomHtml(2,3),
        'excerpt' => $faker->randomHtml(2,3),
        'slug' => $faker->slug,
        'perman_link' => $faker->slug,
        'status' => 'active',
        'level' => $faker->numberBetween($min = 1, $max = 3),
        'type_id' => $faker->numberBetween($min = 1, $max = 4)
    ];
});
