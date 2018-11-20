<?php

use Faker\Generator as Faker;

$factory->define(App\posts::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->decription,
        'content' => $faker->content,
         'id_ct' => Category::all() -> random() ->id_ct,
    ];
});
