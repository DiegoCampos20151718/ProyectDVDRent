<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "first_name" => fake()->firstName(),
            "last_name"  => fake()->lastName(),
            "phone_number" => fake()->numerify('449#######'),
            "address"=> fake()->paragraph($nbSentences = 3),
            "date_of_admission" => fake()-> date()
        ];
    }
}
