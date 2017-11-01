<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(\App\Thread::class, function (Faker $faker) {
    return [
        'title' =>$faker->sentence(),
        'body'  =>$faker->paragraph(),
        'user_id' => function(){
           return factory('App\User')->create()->id;
        },
    ];
});
