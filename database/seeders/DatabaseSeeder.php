<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(50)->create();
        
    }
}
