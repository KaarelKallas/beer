<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stuff>
 */
class StuffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'price' => fake()->randomFloat(),
            'size' => fake()->randomElement($array = array (330,500,10000)),
            'amount' => fake()->numberBetween(1,1000),
            'name' => fake()->name(),
        ];
    }
}
