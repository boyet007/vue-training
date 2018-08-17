<?php

use Faker\Generator as Faker;

$factory->define(App\Crud::class, function (Faker $faker) {
    
    $color = array('green', 'red');
    $rand_keys = array_rand($color, 1);
    return [
        'name' => $faker->name,
        'color' => $color[$rand_keys]
    ];
});
