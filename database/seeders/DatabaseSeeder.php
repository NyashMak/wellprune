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
        $user1 = \App\Models\User::create([
            'name' => 'Nyasha',
            'email' => 'nyasha@wellp.com',
            'password' => 'asdasd',
        ]);

        $user2 = \App\Models\User::create([
            'name' => 'Raul',
            'email' => 'raula@wellp.com',
            'password' => 'asdasd',
        ]);

        Post::create([
            'user_id'=> $user1->id,
            'coverimage' => 'backend.jpg',
            'topic' => 'Creating the BackEnd Scaffolding',
            'content' => 'This where the content of the Subject Topic will be stored',
            'tags' => 'Laravel, PHP, HTML, CSS, Boostrap',
            'link' => 'https://github.com/NyashMak/wellprune',
            'comments' => 1,

        ]);

        Post::create([
            'user_id'=> $user2->id,
            'coverimage' => 'admin.jpg',
            'topic' => 'Creating the Layout for the Admin Portal',
            'content' => 'This where the content of the Subject Topic will be stored',
            'tags' => 'Laravel, PHP, HTML, CSS, Boostrap',
            'link' => 'https://github.com/NyashMak/wellprune',
            'comments' => 1,

        ]);
    }
}
