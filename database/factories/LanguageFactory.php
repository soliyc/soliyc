<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Model\Language;
use Faker\Generator as Faker;

$factory->define(Language::class, function (Faker $faker) {
    return [
        'language_id' => 1,
        'name' => 'English',
        'code' => 'en-gb',
        'locale'=> 'en-gb,en',
        'status' => 1
    ];
});
