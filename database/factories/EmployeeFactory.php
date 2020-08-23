<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
            'email' => $faker->unique()->safeEmail,
            'gender' => $faker->title($gender = 'GENDER_MALE'|'GENDER_FEMALE')  ,
            'first_name' => $faker->firstName($gender = 'GENDER_MALE'|'GENDER_FEMALE'),
            'last_name' => $faker->lastName($gender = 'GENDER_MALE'|'GENDER_FEMALE'),
            'salary' => $faker->numberBetween($min = 5000, $max = 9000) ,
            'position' => 'factory insert',
            'phone' => $faker->phoneNumber,
            'city' => $faker->state,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'photo'=> $faker->randomElement($array = array ('backend/img/man.png','backend/img/girl.png'))
    ];
});
