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
        $hashed_random_password = Hash::make("1234567890");

        DB::table('users')-> delete();
        DB::table('users')-> insert(
            [

            'name' => 'Superadmin',
            'email' => 'superadmin@icep.com',
            'password' => $hashed_random_password,
            'roles' => '1'

            ]
        );

        DB::table('users')-> insert(
            [

            'name' => 'Admin',
            'email' => 'admin@icep.com',
            'password' => $hashed_random_password,
            'roles' => '2'

            ]
        );

        DB::table('users')-> insert(
            [

            'name' => 'User',
            'email' => 'user@icep.com',
            'password' => $hashed_random_password,
            'roles' => '3'

            ]
        );
    }
}
