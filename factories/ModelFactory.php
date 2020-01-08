<?php

use Faker\Generator;

/*
 * @var $factory Illuminate\Database\Eloquent\Factory
 */
$factory->define(Model::class, function (Generator $faker) {
    return [
        'email' => $faker->email,
    ];
});
