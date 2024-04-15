<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\JobPost;
use \App\Models\Employer;

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
            'description' => fake()->paragraphs(3, true),
            'salary' => fake()->numberBetween(5_000, 150_000),
            'location' => fake()->city,
            'category' => fake()->randomElement(JobPost::$category),
            'experience' => fake()->randomElement(JobPost::$experience)
        ];
    }
}
