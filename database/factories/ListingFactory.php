<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->randomElement([1, 2, 3, 4, 5]),
            'title' => fake()->sentence(),
            'tags' => 'laravel, filament, vue, alpine.js',
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'description' => fake()->paragraph(5),
            'website' => fake()->url(),
            'sallary_from' => rand(1, 999),
            'sallary_to' => rand(1, 9999),
            'employment_type' => fake()->randomElement(['Full Time', 'Part Time']),
            'logo' => fake()->imageUrl(360, 360)
        ];
    }

    
}
