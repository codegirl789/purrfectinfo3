<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Status;
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
        $status = Status::all()->random();
        $category = Category::all()->random();
        return [
            'sub_category_id' => fake()->randomElement([1, 2, 3, 4]),
            'category_id' => $category->id,
            'status_id' => $status->id,
            'title' => fake()->words(8, true),
            'content' => fake()->paragraph(300, true),
            'image' => fake()->randomElement(['images/1.png', 'images/2.png', 'images/3.png', 'images/4.png', 'images/5.png', 'images/6.png', 'images/7.png']),
        ];
    }
}
