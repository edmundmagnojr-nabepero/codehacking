<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>Str::random(10),
            'role_id'=>2,
            'is_active'=>1,
            'email'=>Str::random(10).'@codingfaculty.com',
            'password'=>bcrypt('secret')
        ]);
    }
}
