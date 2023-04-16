<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        User::factory(3)->create();
        $this->call(AdminSeeder::class);   // dodajemo ovo da napravimo jednog fake admina

        
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => 'test123'
        //      ]);
    
    // $cat4 = Category::create([
        //     'name'=>'Test',
        //     'slug'=>'test'
        // ]);
        $user = User::find(1);
        $user1 = User::find(2);
        $user2 = User::find(3);
        // $cat = User::find(4);
        // $post = Post::create([
        //     'title'=>'Test post 2',
        //     'excerpt'=>'test isecak 2',
        //     'body'=>'test body 2',
        //     'slug'=>'test-post-2',
        //     'category_id'=>$cat->id,
        //     'user_id'=>$user->id
        // ]);

        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();

        Post::factory(2)->create([
            'user_id' => $user->id,
            'category_id' => $cat1->id,
        ]);

        Post::factory(2)->create([
            'user_id' => $user2->id,
            'category_id' => $cat2->id,
        ]);

        $this->call([
            PostSeeder::class,
            // CategorySeeder::class
        ]);


    }
}

