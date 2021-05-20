<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('employees')->insert([
            [
                'name' => 'Master Employee',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('echoman13'),
                'role' => 'admin'
            ]
        ]);

        DB::table('employees')->insert([
            [
                'name' => 'Normal Employee',
                'email' => 'employee@gmail.com',
                'password' => bcrypt('echoman13'),
                'role' => 'employee'
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User Example',
                'email' => 'user@gmail.com',
                'password' => bcrypt('echoman13'),
            ]
        ]);
    }
}
