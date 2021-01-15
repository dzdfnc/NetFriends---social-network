<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'test3@gmail.com',
            'email_verified_at' => now(),
            'username' => 'admin',
            'password' => Hash::make('test1234'),
            'first_name' => 'test',
            'last_name' => '',
            'gender' => 'f',
            'location' => 'Earth',
            'verify' => 1,
        ]);
    }
}
