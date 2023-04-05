<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $user = User::find(1);

        $cat = Category::find(1);

        Post::factory(2)->create([
            'user_id' => $user->id,
            'category_id' => $cat->id
        ]);
    }
}
