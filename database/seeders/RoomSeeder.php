<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe City Room',
            'size' => 431,
            'type_of_bed' => 'King/Twin',
            'view' => 'City/Pool view',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Park View Room',
            'size' => 431,
            'type_of_bed' => 'King/Twin',
            'view' => 'KLCC Park',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Twin Towers View Room',
            'size' => 431,
            'type_of_bed' => 'King/Twin',
            'view' => 'Petronas Twin Towers View',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Executive Park View Room',
            'size' => 517,
            'type_of_bed' => 'King',
            'view' => 'KLCC Park',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Deluxe City View Room',
            'size' => 431,
            'type_of_bed' => 'King',
            'view' => 'Kuala Lumpur’s skyline or pool',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Twin Tower Room',
            'size' => 431,
            'type_of_bed' => 'King/Twin',
            'view' => 'Petronas Twin Towers View',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Executive Park View Room',
            'size' => 517,
            'type_of_bed' => 'King',
            'view' => 'Panoramic views of the KLCC park',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe City Room',
            'size' => 431,
            'type_of_bed' => 'King/Twin',
            'view' => 'City/Pool view',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Mandarin Room',
            'size' => 883,
            'type_of_bed' => 'King',
            'view' => 'KLCC Park',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Park Suite',
            'size' => 883,
            'type_of_bed' => 'King',
            'view' => 'KLCC Park',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Suite',
            'size' => 1776,
            'type_of_bed' => 'King',
            'view' => 'Petronas Twin Towers View',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Presidential Suite',
            'size' => 3552,
            'type_of_bed' => 'King',
            'view' => 'KLCC Park/City/Petronas Twin Towers view',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '1',

            ]
        );

        //Impiana
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Superior Plus',
            'size' => 323,
            'type_of_bed' => 'Twin',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Plus',
            'size' => 388,
            'type_of_bed' => 'King',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Superior',
            'size' => 323,
            'type_of_bed' => 'Queen',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Twin',
            'size' => 388,
            'type_of_bed' => 'Two Single Size',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe King',
            'size' => 388,
            'type_of_bed' => 'King',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Executive Suite',
            'size' => 646,
            'type_of_bed' => 'King',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Deluxe Twin',
            'size' => 404,
            'type_of_bed' => 'Twin',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Deluxe King',
            'size' => 404,
            'type_of_bed' => 'King',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Premier',
            'size' => 527,
            'type_of_bed' => 'King',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Suite',
            'size' => 818,
            'type_of_bed' => 'King',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Impiana Suite',
            'size' => 1324,
            'type_of_bed' => 'King & Twin',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Orchid Floor',
            'size' => 404,
            'type_of_bed' => 'King/Twin',
            'view' => '',
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '2',

            ]
        );

        //Grand Hyatt Kuala Lumpur
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Room',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'City view',
            'single_rate' => 1200.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Garden View Room',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'KLCC Park',
            'single_rate' => 1250.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Twin Towers View Room',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'City view',
            'single_rate' => 1200.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Petronas Twin Towers View',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'City view',
            'single_rate' => 1300.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Deluxe Room',
            'size' => 700,
            'type_of_bed' => 'King',
            'view' => "Kuala Lumpur's city skyline",
            'single_rate' => 1400.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Twin Towers View Deluxe Room',
            'size' => 700,
            'type_of_bed' => 'King',
            'view' => 'Petronas Twin Towers View',
            'single_rate' => 1500.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Room',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'City view',
            'single_rate' => 1600.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Garden View Room',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'KLCC Park',
            'single_rate' => 1620.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club Twin Towers View Room',
            'size' => 506,
            'type_of_bed' => 'King',
            'view' => 'Petronas Twin Towers View',
            'single_rate' => 1700.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Suite',
            'size' => 1130,
            'type_of_bed' => 'King',
            'view' => "Kuala Lumpur's city skyline",
            'single_rate' => 2400.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Twin Towers View Suite',
            'size' => 1130,
            'type_of_bed' => 'King',
            'view' => 'Petronas Twin Towers View',
            'single_rate' => 2600.00,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '3',

            ]
        );

        //Shangri-La
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Room',
            'size' => 398,
            'type_of_bed' => 'King',
            'view' => "City view or the hotel's lush gardens",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Executive Room',
            'size' => 419,
            'type_of_bed' => 'King',
            'view' => "City view or the hotel's lush gardens",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Horizon Club Executive Room',
            'size' => 419,
            'type_of_bed' => 'King',
            'view' => "City view or the hotel's lush gardens",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Executive Suite',
            'size' => 816,
            'type_of_bed' => 'King',
            'view' => "City view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Premier Selection Suite',
            'size' => 861,
            'type_of_bed' => 'King',
            'view' => "Panoramic views",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Specialty Suite',
            'size' => 1237,
            'type_of_bed' => 'King',
            'view' => "Panoramic views",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Malaysian Suite',
            'size' => 2583,
            'type_of_bed' => 'King',
            'view' => "Panoramic views",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Royal Suite',
            'size' => 2583,
            'type_of_bed' => 'King',
            'view' => "Panoramic views",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 0,
            'hotel_id' => '4',

            ]
        );

        //The Ruma Hotel & Residence
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Room',
            'size' => 463,
            'type_of_bed' => 'King/Twin',
            'view' => "City view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 550.00,
            'hotel_id' => '7',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Room',
            'size' => 484,
            'type_of_bed' => 'King/Twin',
            'view' => "City view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 590.00,
            'hotel_id' => '7',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Corner Studio',
            'size' => 484,
            'type_of_bed' => 'King',
            'view' => "Petronas Twin Towers or The Exchange 106 view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 650.00,
            'hotel_id' => '7',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Studio',
            'size' => 517,
            'type_of_bed' => 'King',
            'view' => "Petronas Twin Towers view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 750.00,
            'hotel_id' => '7',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Suite',
            'size' => 646,
            'type_of_bed' => 'King',
            'view' => "Petronas Twin Towers view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 1210.00,
            'hotel_id' => '7',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Suite',
            'size' => 947,
            'type_of_bed' => 'King',
            'view' => "City view",
            'single_rate' => 0,
            'double_rate' => 0,
            'corporate_rate' => 1670.00,
            'hotel_id' => '7',

            ]
        );

        //InterContinental Kuala Lumpur
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Room',
            'size' => 452,
            'type_of_bed' => 'King/Twin',
            'view' => '',
            'single_rate' => 450.00,
            'double_rate' => 500.00,
            'corporate_rate' =>0,
            'hotel_id' => '8',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Premier Room',
            'size' => 452,
            'type_of_bed' => 'King/Twin',
            'view' => '',
            'single_rate' => 500.00,
            'double_rate' => 550.00,
            'corporate_rate' =>0,
            'hotel_id' => '8',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Grand Premier Room',
            'size' => 452,
            'type_of_bed' => 'Super King/Twin',
            'view' => '',
            'single_rate' => 600.00,
            'double_rate' => 650.00,
            'corporate_rate' =>0,
            'hotel_id' => '8',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Club InterContinental Room',
            'size' => 452,
            'type_of_bed' => 'Super King',
            'view' => '',
            'single_rate' => 680.00,
            'double_rate' => 680.00,
            'corporate_rate' =>0,
            'hotel_id' => '8',

            ]
        );

        //Pullman Kuala Lumpur City Centre
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Deluxe Room',
            'size' => 385,
            'type_of_bed' => 'King',
            'view' => 'Downtown Kuala Lumpur',
            'single_rate' => 460.00,
            'double_rate' => 500.00,
            'corporate_rate' =>0,
            'hotel_id' => '9',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Premium Deluxe Room',
            'size' => 385,
            'type_of_bed' => 'King',
            'view' => 'Kuala Lumpur skyline',
            'single_rate' => 510.00,
            'double_rate' => 550.00,
            'corporate_rate' =>0,
            'hotel_id' => '9',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Premium Grand Deluxe Room',
            'size' => 581,
            'type_of_bed' => 'King',
            'view' => 'Panoramic views',
            'single_rate' => 540.00,
            'double_rate' => 580.00,
            'corporate_rate' =>0,
            'hotel_id' => '9',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Executive Club Room',
            'size' => 385,
            'type_of_bed' => 'King/Two single',
            'view' => 'Kuala Lumpur skyline',
            'single_rate' => 700.00,
            'double_rate' => 700.00,
            'corporate_rate' =>0,
            'hotel_id' => '9',

            ]
        );
        DB::table('hotel_rooms')-> insert(
            [
            'room_type' => 'Executive Suite ',
            'size' => 1159,
            'type_of_bed' => 'King',
            'view' => 'Kuala Lumpur skyline',
            'single_rate' => 1200.00,
            'double_rate' => 1200.00,
            'corporate_rate' =>0,
            'hotel_id' => '9',

            ]
        );
    }
}
