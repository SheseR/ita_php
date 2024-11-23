<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userCount = User::count();

        if($userCount <= 0){
            throw new Exception('There are no users');
        }

        $postCount = Post::count();
        if ($postCount <= 0){
            throw new Exception('There are no post');
        }

        return [
            'user_id' => rand(1, $userCount),
            'post_id' => rand(1, $postCount / 2),
            'text' => $this->faker->realText(),
        ];
    }
}
