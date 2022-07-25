<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workout>
 */
class WorkoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'exercise'=>$this->faker->word(),
            'sets'=>$this->faker->numberBetween($min = 4, $max = 6),
            'reps'=>$this->faker->numberBetween($min = 6, $max = 15),
            'weight'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 50),
            'rest'=>$this->faker->numberBetween($min = 15, $max = 180),
            'obs'=>$this->faker->sentence($nbWords = 6, $variableNbWords = true),
        ];
    }
}
