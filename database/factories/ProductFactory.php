<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Country;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //not sure what to use as product name, let's make it company name then
            'name' => fake()->unique()->company(),
            'description' => fake()->realText(255),
            'user_id' => User::first()->id,
            'status_id' => Status::inRandomOrder()->first()->id,
            'country_id' => Country::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id
        ];
    }
}
