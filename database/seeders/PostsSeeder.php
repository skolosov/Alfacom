<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'name' => 'Пост 1',
            'avatar' => 'url на аватар',
            'desc' => 'Тело поста 1',
            'status' => 1
        ]);
        Post::create([
            'name' => 'Пост 2',
            'avatar' => 'url на аватар',
            'desc' => 'Тело поста 2',
            'status' => 2
        ]);
    }
}
