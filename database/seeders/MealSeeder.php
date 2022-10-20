<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    public function run()
    {
        Meal::factory()
            ->count(10)
            ->create();
    }
}