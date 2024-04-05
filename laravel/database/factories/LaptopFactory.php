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
        return([
            'type' => fake()->randomElement(['Gaming', 'Business', 'Ultrabook']),
            'ram' => fake()->randomElement(['4GB', '8GB', '16GB']),
            'ssd' => fake()->randomElement(['128GB', '256GB', '512GB']),
            'processor_type' => fake()->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 7']),
            'processor_speed' => fake()->randomFloat(2, 2.0, 4.5) . 'GHz',
            'display_size_inch' => fake()->randomFloat(1, 13.3, 17.3),
            'display_size_sm' => fake()->randomFloat(2, 33.78, 43.94),
            'display_type' => fake()->randomElement(['LED', 'IPS', 'OLED']),
            'display_resolution' => fake()->randomElement(['1920x1080', '2560x1440', '3840x2160']),
            'description' => fake()->text,
        ]);

    }
}
