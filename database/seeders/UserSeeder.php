<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hashed_random_password = Hash::make("admin");

        DB::table('users')-> delete();
        DB::table('users')-> insert(
            [

            'name' => 'admin',
            'email' => 'admin@aces.com',
            'password' => $hashed_random_password,

            ]
        );
    }
}
