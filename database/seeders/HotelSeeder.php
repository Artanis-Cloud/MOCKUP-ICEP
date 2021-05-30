<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HotelSeeder extends Seeder
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

            'hotel_name' => 'Mandarin Oriental',            //hotel 1
            'car_radius' => 1600,
            'walking_radius' => 300,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Impiana',                    //hotel 2
            'car_radius' => 1700,
            'walking_radius' => 90,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Grand Hyatt Kuala Lumpur',      //hotel 3
            'car_radius' => 1700,
            'walking_radius' => 110,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Shangri-La',                    //hotel 4
            'car_radius' => 1500,
            'walking_radius' => 1000,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'EQ Kuala Lumpur',               //hotel 5
            'car_radius' => 850,
            'walking_radius' => 850,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Four Seasons',               //hotel 6
            'car_radius' => '',
            'walking_radius' => '',

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'The Ruma Hotel & Residence',               //hotel 7
            'car_radius' => 290,
            'walking_radius' => 260,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'InterContinental Kuala Lumpur',               //hotel 8
            'car_radius' => 1800,
            'walking_radius' => 1400,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Pullman Kuala Lumpur City Centre',               //hotel 9
            'car_radius' => 1100,
            'walking_radius' => 650,

            ]
        );

        DB::table('hotels')-> insert(
            [

            'hotel_name' => 'Traders',               //hotel 10
            'car_radius' => '',
            'walking_radius' => '',

            ]
        );

        // DB::table('hotels')-> insert(
        //     [

        //     'hotel_name' => 'Kuala Lumpur Convention Center',               //hotel 11
        //     'car_radius' => '',
        //     'walking_radius' => '',

        //     ]
        // );

    }
}
