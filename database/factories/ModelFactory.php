<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {

    $name = $faker->sentence;
    return [
        'name' => $name,
        'description' => $faker->paragraph(4),
        'slug' => str_slug($name),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {

    $name = $faker->sentence;
    return [
        'name' => $name,
        'description' => $faker->paragraph(4),
        'slug' => str_slug($name),
        'code' => $faker->word,
        'isActive' => true,
        'price' => 60.0,
        'tax_id' => 1
    ];
});

$factory->define(App\Addon::class, function (Faker\Generator $faker) {

    $name = $faker->word;
    return [
        'name' => $name,
        'description' => $faker->paragraph(4),
        'slug' => str_slug($name),
        'isActive' => true,
        'price' => 60.0,
        'tax_id' => 1
    ];
});

$factory->define(App\Tax::class, function (Faker\Generator $faker) {

    $name = $faker->word;
    return [
        'name' => $name,
        'percentageRate' => 0.12
    ];
});

$factory->define(App\Delivery::class, function (Faker\Generator $faker) {

    return [
        'type' => $faker->word,
        'description' => $faker->paragraph(4),
        'price' => 10.0
    ];
});


$factory->define(App\Shipping::class, function(Faker\Generator $faker){
    return [
        'message' => $faker->paragraph,
        'customerName' => $faker->name,
        'customerPhone' => $faker->phoneNumber,
        'date' => Carbon\Carbon::now(),
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        'province' => $faker->state,
        'postalCode' => $faker->postcode,
];
});
