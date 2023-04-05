<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::find(5);

        $cat = Category::find(1);

        Task::factory(2)->create([
            'user_id' => $user->id,
            'category_id' => $cat->id
        ]);
    }
}
