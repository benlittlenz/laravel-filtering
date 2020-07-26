<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Projects;
use Faker\Generator as Faker;

$factory->define(Projects::class, function (Faker $faker) {
    return [
        'project_ref' => $faker->jobTitle,
        'project_desc' => $faker->sentence,
    ];
});
