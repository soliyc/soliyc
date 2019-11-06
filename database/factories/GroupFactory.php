<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Model\Group;
use App\Http\Model\GroupDescription;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'status' => 1,
        'deleted' => 0
    ];
});

$factory->define(GroupDescription::class, function (Faker $faker) {
    return [
        'group_id' => 1,
        'language_id' => 1,
        'name' => 'Default',
        'description' => ''
    ];
});
