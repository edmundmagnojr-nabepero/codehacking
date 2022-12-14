<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Photo;
use App\Models\Category;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('categories')->truncate();
        DB::table('roles')->truncate();
        DB::table('photos')->truncate();
        //factory(App\User::class, 10)->create();
        User::factory()->count(10)->create()->each(function($user){
            $user->posts()->save(Post::factory()->make());
        });
        Role::factory()->count(3)->create();
        Category::factory()->count(5)->create();
        Photo::factory()->count(1)->create();
        //Comment::factory()->count(3)->create();
        //$this->call(UsersTableSeeder::class);
    }
}
