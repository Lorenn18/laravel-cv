<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Identity>
 */
class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'firstName' => fake(),
        'lastName' => fake(),
        'address' => fake(),
        'city' => fake(),
        'zip_code' => fake(),
        'tel' => fake(),
        'email' => fake(),
        'about' => fake()->paragraph(2),
        ];
    }
}
