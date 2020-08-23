<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;
use Faker\Provider\id_ID;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
            'email' => $faker->unique()->safeEmail,
            'gender' => $faker->randomElement($array = array ('Mr.','Mrs.'))  ,
            'first_name' => $faker->firstName($gender = 'male'|'female'),
            'last_name' => $faker->lastName($gender = 'male'|'female'),
            'salary' => $faker->numberBetween($min = 5000, $max = 9000) ,
            'position' => 'factory insert',
            'phone' => $faker->phoneNumber,
            'city' => $faker->state,
            'join_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'photo'=> $faker->randomElement($array = array ('backend/img/man.png','backend/img/girl.png'))
    ];
});
