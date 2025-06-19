<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->word(rand(1, 2)),
            'course_code' => fake()->randomNumber(),
            'credits' => rand(1, 3),
            'description' => fake()->paragraph(2),
        ];
    }
}
