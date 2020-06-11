<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {

    $paragraphs = $faker->paragraphs(4, false);
    $htmlParagraphs = '';
    foreach($paragraphs as $p) {
        $htmlParagraphs .= '<p>'. $p .'</p>';
    }

    return [
        'title' => $faker->sentence(),
        'content' => $htmlParagraphs,
    ];
});