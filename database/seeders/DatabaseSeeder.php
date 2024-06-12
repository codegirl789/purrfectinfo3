<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostUser;
use App\Models\Status;
use App\Models\SubCategory;
use App\Models\SuperCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        SuperCategory::factory()->create([
            'name' => 'Animals',
            'description' => fake()->paragraph(),
            'image' => 'images/1.png',
        ]);

        SuperCategory::factory()->create([
            'name' => 'Birds',
            'description' => fake()->paragraph(),
            'image' => 'images/2.png',
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Dogs',
            'description' => fake()->paragraph(),
            'image' => 'images/3.png',
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Cats',
            'description' => fake()->paragraph(),
            'image' => 'images/4.png',
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Rabbits',
            'description' => fake()->paragraph(),
            'image' => 'images/5.png',
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Hamsters',
            'description' => fake()->paragraph(),
            'image' => 'images/6.png',
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Guinea Pigs',
            'description' => fake()->paragraph(),
            'image' => 'images/7.png',
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Parakeets',
            'description' => fake()->paragraph(),
            'image' => 'images/8.png',
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Canaries',
            'description' => fake()->paragraph(),
            'image' => 'images/9.png',
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Cockatiels',
            'description' => fake()->paragraph(),
            'image' => 'images/10.png',
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Lovebirds',
            'description' => fake()->paragraph(),
            'image' => 'images/11.png',
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Cockatoos',
            'description' => fake()->paragraph(),
            'image' => 'images/12.png',
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Linches',
            'description' => fake()->paragraph(),
            'image' => 'images/13.png',
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'name' => 'Health and Wellness',
            'description' => fake()->paragraph(),
            'image' => 'images/7.png',
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'name' => 'Training and Behavior',
            'description' => fake()->paragraph(),
            'image' => 'images/7.png',
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'name' => 'Breed-Specific Posts',
            'description' => fake()->paragraph(),
            'image' => 'images/7.png',
        ]);

        SubCategory::factory()->create([
            'category_id' => 1,
            'name' => 'Activities and Enrichment',
            'description' => fake()->paragraph(),
            'image' => 'images/7.png',
        ]);

        Status::factory()->create(['name' => 'Open', 'classes' => 'bg-gray-200']);
        Status::factory()->create(['name' => 'Considering', 'classes' => 'bg-purple-500 text-white']);
        Status::factory()->create(['name' => 'In Progress', 'classes' => 'bg-yellow-500 text-white']);
        Status::factory()->create(['name' => 'Implemented', 'classes' => 'bg-green-500 text-white']);
        Status::factory()->create(['name' => 'Closed', 'classes' => 'bg-red-500 text-white']);

        Post::factory(150)->create();

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lovepreet',
            'email' => 'lk@gmail.com',
            'password' => Hash::make('password')
        ]);

        PostUser::factory(300)->create();
    }
}
