<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Console\Command;

class update_post_category_id extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update_post_category_id';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $categoryIds = Category::pluck('id')->toArray();
        $posts = Post::all();
        foreach ($posts as $post) {
            $post->category_id = $categoryIds[array_rand($categoryIds)];
            $post->save();
        }

        echo 'Task is completed for ' . $posts->count() . ' posts';
    }
}
