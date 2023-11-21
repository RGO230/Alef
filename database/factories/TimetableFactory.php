<?php

namespace Database\Factories;

use App\Models\Curriculum;
use App\Models\Lecture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Timetable>
 */
class TimetableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curriculum_id' => Curriculum::inRandomOrder()->first()->id,
            'lecture_id'    => Lecture::inRandomOrder()->first()->id,
            'lecture_queue' => $this->faker->unique()->numberBetween(1,40)

        ];  
    }
}
