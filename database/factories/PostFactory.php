<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
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
        $categoryIds = Category::all()->pluck('id')->toArray();
        $categoryId = $categoryIds[array_rand($categoryIds)];

        return [
            'title' => fake()->title(),
            'preview' => fake()->text(200),
            'text' => fake()->paragraph(10),
            'author' => fake()->name(),
            'published' => fake()->boolean(),
            'category_id' => $categoryId
        ];
    }
}
