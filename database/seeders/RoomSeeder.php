<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Grand Ballroom',
            'car_radius' => 'superadmin@icep.com',
            'walking_radius' => '',

            ]
        );
    }
}
