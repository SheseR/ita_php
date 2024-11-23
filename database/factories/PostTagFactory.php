<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PostTagFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // HomeWork: Should be improved, this is just example
        // 1. Post has to have at least one tag
        // 2. Post can to have less than 5 tags
        // 3. Post can to have unique tags
        // PS: this code should be implemented into DatabaseSeeder method
//        $postIds = Post::all()->pluck('id')->toArray();
//        $tagIds = Tag::all()->pluck('id')->toArray();
//        $postTagsToInsert = [];
//        foreach ($postIds as $postId) {
//            $postTagsToInsert[] = [
//                'post_id' => $postId,
//                'tag_id' => $tagIds[array_rand($tagIds)]
//            ];
//        }
        // Insert into db $postTagsToInsert data

        #
        $postCount = Post::count(); # 150
        $tagCount = Tag::count();   # 10

        return [
            'post_id' => random_int(1, $postCount),
            'tag_id' => random_int(1, $tagCount)
        ];
    }
}
