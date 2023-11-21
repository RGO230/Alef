<?php

namespace Database\Factories;

use App\Models\Curriculum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecture>
 */
class LectureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'theme'         => $this->faker->unique()->word,
            'description'   => $this->faker->sentence(5, true),
            'curriculum_id' => Curriculum::inRandomOrder()->first()->id,
        ];
    }
}
