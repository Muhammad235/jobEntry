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
            'title' => fake()->sentence(),
            'tags' => 'laravel',
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'description' => fake()->paragraph(5),
            'website' => fake()->url(),
            'sallary_from' => rand(1, 999),
            'sallary_to' => rand(1, 9999),
            'employment_type' => fake()->randomElement(['Full Time', 'PartTime']),
            'logo' => fake()->imageUrl(360, 360)
        ];
    }

    
}
