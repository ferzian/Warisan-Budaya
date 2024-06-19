<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'bg-card' => fake()->imageUrl(),
            'hero-img' => fake()->imageUrl(),
            'img' => fake()->imageUrl(),
            'category' => fake()->sentence(1),
            'desc1' => fake()->paragraph(4),
            'desc2' => fake()->paragraph(4),
            'desc3' => fake()->paragraph(4),
            'desc4' => fake()->paragraph(4)
        ];
    }
}
