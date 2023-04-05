<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(2),
            'excerpt'=>fake()->sentence(),
            'body'=>fake()->paragraph(4),
            'slug'=>fake()->unique()->slug(),
            'category_id'=>Category::factory(),
            'user_id'=>User::factory()
        ];
    }
}
