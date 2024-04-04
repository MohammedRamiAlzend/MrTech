<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type'=> fake()->randomAscii(),
            'ram'=>fake()->randomNumber(3),
            'ssd'=>fake()->randomNumber(4),
            'processor_type'=>fake()->company,
            'processor_speed'=>fake()->randomNumber(2)."GHZ",
            'display_size_inch'=>fake()->randomNumber(4),
            'display_size_sm'=>fake()->randomNumber(4),
            'display_type'=>fake()->randomNumber(4),
            'display_resolution'=>fake()->randomNumber(4),
            'description'=>fake()->text(200)
        ];
    }
}
