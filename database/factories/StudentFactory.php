<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "control"=> fake()->numerify('2315####'),
            "name"=> fake()->firstName(),
            "last_name"=> fake()->lastName(),
            "email"=> fake()-> safeEmail(),
            "semester"=> fake()->numberBetween(1,12),
            "program_id"=> Program::all()->random()->id
        ];
    }
}
