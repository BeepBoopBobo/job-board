<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\JobPost;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobPost>
 */
class JobPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle,
            'category' => fake()->randomElement(JobPost::$category),
            'experience' => fake()->randomElement(JobPost::$experience),
            'description' => fake()->paragraphs(3, true),
            'salary' => fake()->numberBetween(30_000, 150_000),
            'location' => fake()->city,
        ];
    }
}
