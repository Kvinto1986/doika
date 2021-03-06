<?php

use Diglabby\Doika\Models\Campaign;

/**
 * @see https://github.com/fzaninotto/Faker#formatters
 * @var \Illuminate\Database\Eloquent\Factory $factory
 */

$factory->define(Campaign::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->words(3, true),
        'description' => $faker->sentence,
        'picture_url' => $faker->imageUrl(),
        'target_amount' => 10000,
        'currency' => 'BYN',
        'started_at' => today(),
        'finished_at' => today()->addMonths(1),
        'active_status' => 1,
    ];
});

$factory->state(Campaign::class, 'inctive', [
    'active_status' => 0,
]);

$factory->state(Campaign::class, 'active', [
    'active_status' => 1,
]);
