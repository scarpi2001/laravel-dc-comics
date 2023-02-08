<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake() -> firstName(),
            'last_name' => fake() -> lastName(),
            'date_of_birth' => fake() -> dateTime(),
            'height' => fake() -> boolean()
                        ? fake() -> numberBetween(40, 300)
                        : null,
        ];
    }
}