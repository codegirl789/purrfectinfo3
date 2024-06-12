<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\SuperCategory;
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
        $super_category = SuperCategory::all()->random();
        $sub_category = SubCategory::all()->random();
        return [
            'super_category_id' => $super_category->id,
            'sub_category_id' => $sub_category->id,
            'category_id' => $category->id,
            'status_id' => $status->id,
            'title' => fake()->words(8, true),
            'content' => fake()->paragraph(300, true),
            'image' => fake()->randomElement(['images/1.png', 'images/2.png', 'images/3.png', 'images/4.png', 'images/5.png', 'images/6.png', 'images/7.png']),
        ];
    }
}
