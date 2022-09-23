<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            $post = Post::query()
                ->orderBy(DB::raw('random()'))
                ->take(1)
                ->first();
            $user = User::query()
                ->orderBy(DB::raw('random()'))
                ->take(1)
                ->first();
            Comment::create([
                'name' => "Комментарий $i",
                'post_id' => $post->getKey(),
                'message' => "Сообщение комментария $i",
                'author_id' => $user->getKey(),
            ]);
        }
    }
}
