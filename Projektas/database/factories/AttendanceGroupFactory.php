<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'description' => $this->faker->paragraph(),
            'difficulty' => $this->faker->randomElement(['a', 'b', 'c', 'd', 'e']),
            'school_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
