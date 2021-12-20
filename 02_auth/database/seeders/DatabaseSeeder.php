<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(["email" => "test@test.de"]);
        User::factory(1)->create(["email" => "test1@test.de"]);
        Post::factory(20)->create(["user_id" => 2]);
    }
}
