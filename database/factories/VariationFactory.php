<?php

namespace Database\Factories;

use App\Models\Stuff;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Variation>
 */
class VariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'stuff_id' => Stuff::inRandomOrder()->first()->id,
            'country' => fake()->country(),
            'color' => fake()->colorName(),
        ];
    }
}
