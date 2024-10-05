<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'Name' => fake()->name(),
        'Email' => fake()->email(),
        'Birthdate' => fake()->date(),
        'Home_address' => fake()->address(),
        'Contact_number' => fake()->phoneNumber()
        ];
    }
}
