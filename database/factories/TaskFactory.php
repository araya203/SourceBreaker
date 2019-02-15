<?php
use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'done' => $faker->boolean,
    ];
});
?>