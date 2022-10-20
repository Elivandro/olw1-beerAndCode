<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    public function definition()
    {
        fake()->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant(fake()));

        return [
            "name" => fake()->meatName()
        ];
    }
}