<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [

      'name' => $faker->sentence(5),
      'description' => $faker->paragraph(3),
      'priority' => $faker->sentence(1),
      'completed' => false,

    ];
});
