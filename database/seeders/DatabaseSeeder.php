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
                'so_dt' => '0705911911'
            ]
        ]);

        DB::table('khoan_vays')->insert([
            ['gia_tri' => '15000000']
        ]);
        DB::table('khoan_vays')->insert([
            ['gia_tri' => '5000000']
        ]);
        DB::table('khoan_vays')->insert([
            ['gia_tri' => '10000000']
        ]);
        DB::table('khoan_vays')->insert([
            ['gia_tri' => '20000000']
        ]);
        DB::table('khoan_vays')->insert([
            ['gia_tri' => '40000000']
        ]);
        DB::table('khoan_vays')->insert([
            ['gia_tri' => '50000000']
        ]);

        DB::table('lai_suat_thangs')->insert([
            ['lai_tin_chap' => '3.5','lai_the_chap' => '3.15', 'thang' => 3]
        ]);

        DB::table('lai_suat_thangs')->insert([
            ['lai_tin_chap' => '3.0','lai_the_chap' => '2.75', 'thang' => 6]
        ]);

        DB::table('lai_suat_thangs')->insert([
            ['lai_tin_chap' => '2.5','lai_the_chap' => '2.0', 'thang' => 12]
        ]);

        DB::table('lai_suat_thangs')->insert([
            ['lai_tin_chap' => '2','lai_the_chap' => '1.75', 'thang' => 24]
        ]);

        DB::table('lai_suat_thangs')->insert([
            ['lai_tin_chap' => '1.75','lai_the_chap' => '1.5', 'thang' => 36]
        ]);

        DB::table('ngan_saches')->insert([
            ['nam' => '2020', 'tong'=> '1000000000','lan' => '1',
                'con_lai' => '1000000000', 'created_at' => now(),
                'updated_at' => now() ]
        ]);

    }
}
