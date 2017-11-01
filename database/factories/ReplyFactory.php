<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence(),
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        },
        
        'thread_id' => function(){
            return factory('App\Thread')->create()->id;
        }
    ];
});
