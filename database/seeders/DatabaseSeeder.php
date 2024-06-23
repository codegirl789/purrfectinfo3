<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use App\Models\Comment;
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

        // Color::factory()->create(
        //     [
        //         'name' => 'Slate',
        //         'classes' => 'bg-slate-500'
        //     ]
        // );
        // Color::factory()->create(
        //     [
        //         'name' => 'gray',
        //         'classes' => 'bg-gray-500'
        //     ]
        // );
        // Color::factory()->create(
        //     [
        //         'name' => 'zinc',
        //         'classes' => 'bg-zinc-500'
        //     ]
        // );
        Color::factory()->create(
            [
                'name' => 'neutral',
                'classes' => 'bg-neutral-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'red',
                'classes' => 'bg-red-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'orange',
                'classes' => 'bg-orange-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'amber',
                'classes' => 'bg-amber-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'yellow',
                'classes' => 'bg-yellow-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'lime',
                'classes' => 'bg-lime-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'green',
                'classes' => 'bg-green-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'emerald',
                'classes' => 'bg-emerald-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'teal',
                'classes' => 'bg-teal-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'cyan',
                'classes' => 'bg-cyan-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'sky',
                'classes' => 'bg-sky-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'blue',
                'classes' => 'bg-blue-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'indigo',
                'classes' => 'bg-indigo-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'purple',
                'classes' => 'bg-purple-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'violet',
                'classes' => 'bg-violet-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'fuchsia',
                'classes' => 'bg-fuchsia-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'pink',
                'classes' => 'bg-pink-500'
            ]
        );
        Color::factory()->create(
            [
                'name' => 'rose',
                'classes' => 'bg-rose-500'
            ]
        );



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
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Cats',
            'description' => fake()->paragraph(),
            'image' => 'images/4.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Rabbits',
            'description' => fake()->paragraph(),
            'image' => 'images/5.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Hamsters',
            'description' => fake()->paragraph(),
            'image' => 'images/6.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 1,
            'name' => 'Guinea Pigs',
            'description' => fake()->paragraph(),
            'image' => 'images/7.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Parakeets',
            'description' => fake()->paragraph(),
            'image' => 'images/8.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Canaries',
            'description' => fake()->paragraph(),
            'image' => 'images/9.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Cockatiels',
            'description' => fake()->paragraph(),
            'image' => 'images/10.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Lovebirds',
            'description' => fake()->paragraph(),
            'image' => 'images/11.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Cockatoos',
            'description' => fake()->paragraph(),
            'image' => 'images/12.png',
            'color' => Color::all()->random()->classes,
        ]);

        Category::factory()->create([
            'super_id' => 2,
            'name' => 'Linches',
            'description' => fake()->paragraph(),
            'image' => 'images/13.png',
            'color' => Color::all()->random()->classes,
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


        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lovepreet',
            'email' => 'lk@gmail.com',
            'password' => Hash::make('password'),
            'image' => fake()->randomElement(['users/mouse.jpg', 'users/tiger.jpg', 'users/dog.jpg', 'users/turtle.jpg', 'users/parrot.jpg']),
        ]);

        Post::factory(150)->create();

        PostUser::factory(300)->create();
        Comment::factory(300)->create();
    }
}
