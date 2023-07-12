<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'headline' => fake()->realText($maxNbChars = 100, $indexSize = 2),
            'content' => fake()->realTextBetween($minNbChars = 160, $maxNbChars = 1000, $indexSize = 2),
            'user_id' => rand(2, 51)
        ];
    }
}
