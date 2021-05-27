<?php

namespace Database\Seeders;

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
        $this->call('Database\Seeders\UserSeeder');
        $this->call('Database\Seeders\EventSpaceSeeder');
        $this->call('Database\Seeders\HotelSeeder');
        // $this->call('Database\Seeders\RoomSeeder');

    }
}
