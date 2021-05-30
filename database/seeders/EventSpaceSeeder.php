<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EventSpaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom',
                'level' => 'Level 1',
                'size' => 21796,
                'banquet' => 1800,
                'classroom' => 1600,
                'theater' => 2400,
                'cocktail' => 2800,
                'cabaret' => '',                            //venue 1
                'booth_capacity' => '',
                'daily_rate' => 120000,
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Emerald Room',
                'level' => 'Level 1',
                'size' => 9077,
                'banquet' => 600,
                'classroom' => 500,
                'theater' => 900,
                'cocktail' => 1000,
                'cabaret' => '',                            //venue 2
                'booth_capacity' => '',
                'daily_rate' => 45000,
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sapphire Room',
                'level' => 'Level 1',
                'size' => 12718,
                'banquet' => 900,
                'classroom' => 900,
                'theater' => 1300,
                'cocktail' => 1400,
                'cabaret' => '',                            //venue 3
                'booth_capacity' => '',
                'daily_rate' => 90000,
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom Foyer',
                'level' => 'Level 1',
                'size' => 7795,
                'banquet' => 570,
                'classroom' => '',
                'theater' => '',
                'cocktail' => 900,
                'cabaret' => '',                            //venue 4
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Diamond Ballroom',
                'level' => 'Grd Floor',
                'size' => 5752,
                'banquet' => 360,
                'classroom' => 350,
                'theater' => 550,
                'cocktail' => 600,
                'cabaret' => '',                            //venue 5
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Jade Room',
                'level' => 'Grd Floor',
                'size' => 1837,
                'banquet' => 120,
                'classroom' => 100,
                'theater' => 175,
                'cocktail' => 200,
                'cabaret' => '',                            //venue 6
                'booth_capacity' => '',
                'daily_rate' => '16000',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Opal Room',
                'level' => 'Grd Floor',
                'size' => 1837,
                'banquet' => 120,
                'classroom' => 100,
                'theater' => 175,
                'cocktail' => 200,
                'cabaret' => '',                            //venue 7
                'booth_capacity' => '',
                'daily_rate' => '16000',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pearl Room',
                'level' => 'Grd Floor',
                'size' => 1837,
                'banquet' => 120,
                'classroom' => 100,
                'theater' => 175,
                'cocktail' => 200,
                'cabaret' => '',                            //venue 8
                'booth_capacity' => '',
                'daily_rate' => '16000',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Diamond Ballroom Foyer',
                'level' => 'Grd Floor',
                'size' => '',
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => 400,
                'cabaret' => '',                            //venue 9
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Topaz Room',
                'level' => 'Level 2',
                'size' => 2153,
                'banquet' => 120,
                'classroom' => 144,
                'theater' => 244,
                'cocktail' => 240,
                'cabaret' => '',                            //venue 10
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Crystal Room',
                'level' => 'Level 2',
                'size' => 2583,
                'banquet' => 120,
                'classroom' => 180,
                'theater' => 320,
                'cocktail' => 350,
                'cabaret' => '',                            //venue 11
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );


        DB::table('event_spaces')->insert(
            [

                'venue' => 'Amber Room',
                'level' => 'Level 2',
                'size' => 1335,
                'banquet' => 60,
                'classroom' => 90,
                'theater' => 160,
                'cocktail' => 170,
                'cabaret' => '',                            //venue 12
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Quartz Room',
                'level' => 'Level 2',
                'size' => 1249,
                'banquet' => 60,
                'classroom' => 80,
                'theater' => 140,
                'cocktail' => 150,
                'cabaret' => '',                            //venue 13
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Citrine Room',
                'level' => 'Level 2',
                'size' => 1346,
                'banquet' => 60,
                'classroom' => 108,
                'theater' => 192,
                'cocktail' => 210,
                'cabaret' => '',                            //venue 14
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Jasper Room',
                'level' => 'Level 2',
                'size' => 721,
                'banquet' => 30,
                'classroom' => 48,
                'theater' => 80,
                'cocktail' => 90,
                'cabaret' => '',                            //venue 15
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Peridot Room',
                'level' => 'Level 2',
                'size' => 624,
                'banquet' => 20,
                'classroom' => 48,
                'theater' => 80,
                'cocktail' => 90,
                'cabaret' => '',                            //venue 16
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Onyx Room',
                'level' => 'Level 2',
                'size' => 328,
                'banquet' => 20,
                'classroom' => 35,
                'theater' => 60,
                'cocktail' => 35,
                'cabaret' => '',                            //venue 17
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Parkview 1',
                'level' => 'Level 2',
                'size' => 1216,
                'banquet' => 70,
                'classroom' => 72,
                'theater' => 70,
                'cocktail' => 80,
                'cabaret' => '',                            //venue 18
                'booth_capacity' => '',
                'daily_rate' => 8000,
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Parkview 2',
                'level' => 'Level 2',
                'size' => 990,
                'banquet' => 50,
                'classroom' => 45,
                'theater' => 50,
                'cocktail' => 50,
                'cabaret' => '',                            //venue 19
                'booth_capacity' => '',
                'daily_rate' => 8000,
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Parkview 3',
                'level' => 'Level 2',
                'size' => 861,
                'banquet' => 40,
                'classroom' => 25,
                'theater' => 30,
                'cocktail' => 30,
                'cabaret' => '',                            //venue 20
                'booth_capacity' => '',
                'daily_rate' => 8000,
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Boardroom 1',
                'level' => 'Level 2',
                'size' => 594,
                'banquet' => 12,
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => '',                            //venue 21
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Boardroom 2',
                'level' => 'Level 2',
                'size' => 172,
                'banquet' => 8,
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => '',                            //venue 22
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 1,

            ]
        );

        //Impiana
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Impiana Hall 1',
                'level' => 'Level 1',
                'size' => 2347,
                'banquet' => 80,
                'classroom' => 65,
                'theater' => 180,
                'cocktail' => '',
                'cabaret' => '',                            //venue 1
                'booth_capacity' => '',
                'daily_rate' => 16000,
                'hotel_id' => 2,

            ]
        );

        //Impiana
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Impiana Hall 1',
                'level' => 'Level 1',
                'size' => 2347,
                'banquet' => 80,
                'classroom' => 65,
                'theater' => 180,
                'cocktail' => '',
                'cabaret' => '',                            //venue 1
                'booth_capacity' => '',
                'daily_rate' => 16000,
                'hotel_id' => 2,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Impiana Hall 2',
                'level' => 'Level 1',
                'size' => 2486,
                'banquet' => 120,
                'classroom' => 100,
                'theater' => 260,
                'cocktail' => '',
                'cabaret' => '',                            //venue 2
                'booth_capacity' => '',
                'daily_rate' => 24000,
                'hotel_id' => 2,

            ]
        );


        DB::table('event_spaces')->insert(
            [

                'venue' => 'Impiana Banquet Hall',
                'level' => 'Level 1',
                'size' => 4144,
                'banquet' => 250,
                'classroom' => 180,
                'theater' => 450,
                'cocktail' => '',
                'cabaret' => '',                            //venue 3
                'booth_capacity' => '',
                'daily_rate' => 40000,
                'hotel_id' => 2,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Jasmine Room',
                'level' => 'Level 1',
                'size' => 1163,
                'banquet' => '',
                'classroom' => 40,
                'theater' => 100,
                'cocktail' => '',
                'cabaret' => '',                            //venue 4
                'booth_capacity' => '',
                'daily_rate' => 6500,
                'hotel_id' => 2,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Mawar Room',
                'level' => 'Level 1',
                'size' => 753,
                'banquet' => '',
                'classroom' => 30,
                'theater' => 48,
                'cocktail' => '',
                'cabaret' => '',                            //venue 5
                'booth_capacity' => '',
                'daily_rate' => 4500,
                'hotel_id' => 2,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Melati Room',
                'level' => 'Level 1',
                'size' => 936,
                'banquet' => '',
                'classroom' => 36,
                'theater' => 60,
                'cocktail' => '',
                'cabaret' => '',                            //venue 6
                'booth_capacity' => '',
                'daily_rate' => 5500,
                'hotel_id' => 2,

            ]
        );

        //Grand Hyatt Kuala Lumpur
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom',
                'level' => 'Grd Floor',
                'size' => 11248,
                'banquet' => 700,
                'classroom' => 600,
                'theater' => 1300,
                'cocktail' => 1450,
                'cabaret' => '',                            //venue 1
                'booth_capacity' => '',
                'daily_rate' => 110200,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom 1',
                'level' => 'Grd Floor',
                'size' => 3231,
                'banquet' => 190,
                'classroom' => 140,
                'theater' => 400,
                'cocktail' => 480,
                'cabaret' => '',                            //venue 2
                'booth_capacity' => '',
                'daily_rate' => 110200,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom 2',
                'level' => 'Grd Floor',
                'size' => 4785,
                'banquet' => 320,
                'classroom' => 210,
                'theater' => 500,
                'cocktail' => 480,
                'cabaret' => '',                            //venue 3
                'booth_capacity' => '',
                'daily_rate' => 110200,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom 3',
                'level' => 'Grd Floor',
                'size' => 3231,
                'banquet' => 190,
                'classroom' => 140,
                'theater' => 400,
                'cocktail' => 480,
                'cabaret' => '',                            //venue 4
                'booth_capacity' => '',
                'daily_rate' => 110200,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Salon',
                'level' => 'Level 1',
                'size' => 6956,
                'banquet' => 450,
                'classroom' => 300,
                'theater' => 700,
                'cocktail' => 650,
                'cabaret' => '',                            //venue 5
                'booth_capacity' => '',
                'daily_rate' => 63800,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Salon 1',
                'level' => 'Level 1',
                'size' => 4394,
                'banquet' => 310,
                'classroom' => 180,
                'theater' => 450,
                'cocktail' => 550,
                'cabaret' => '',                            //venue 6
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Salon 2',
                'level' => 'Level 1',
                'size' => 2621,
                'banquet' => 140,
                'classroom' => 120,
                'theater' => 220,
                'cocktail' => 280,
                'cabaret' => '',                            //venue 7
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Residence 100',
                'level' => 'Level 1',
                'size' => 807,
                'banquet' => 20,
                'classroom' => 20,
                'theater' => 40,
                'cocktail' => 40,
                'cabaret' => '',                            //venue 8
                'booth_capacity' => '',
                'daily_rate' => 4640,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Residence 101',
                'level' => 'Level 1',
                'size' => 1830,
                'banquet' => 60,
                'classroom' => 50,
                'theater' => 100,
                'cocktail' => 100,
                'cabaret' => '',                            //venue 9
                'booth_capacity' => '',
                'daily_rate' => 10440,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Residence 102',
                'level' => 'Level 1',
                'size' => 1830,
                'banquet' => 60,
                'classroom' => 50,
                'theater' => 100,
                'cocktail' => 100,
                'cabaret' => '',                            //venue 10
                'booth_capacity' => '',
                'daily_rate' => 10440,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Residence 103',
                'level' => 'Level 1',
                'size' => 1292,
                'banquet' => 40,
                'classroom' => 40,
                'theater' => 60,
                'cocktail' => 80,
                'cabaret' => '',                            //venue 11
                'booth_capacity' => '',
                'daily_rate' => 6960,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pool Side Residence 300',
                'level' => 'Level 3',
                'size' => 645,
                'banquet' => 20,
                'classroom' => 16,
                'theater' => 40,
                'cocktail' => 60,
                'cabaret' => '',                            //venue 12
                'daily_rate' => 3480,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pool Side Residence 301',
                'level' => 'Level 3',
                'size' => 915,
                'banquet' => 40,
                'classroom' => 32,
                'theater' => 70,
                'cocktail' => 70,
                'cabaret' => '',                            //venue 13
                'daily_rate' => 5220,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pool Side Residence 302',
                'level' => 'Level 3',
                'size' => 1453,
                'banquet' => 50,
                'classroom' => 48,
                'theater' => 110,
                'cocktail' => 80,
                'cabaret' => '',                            //venue 14
                'daily_rate' => 8120,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pool Side Residence 303',
                'level' => 'Level 3',
                'size' => 592,
                'banquet' => 20,
                'classroom' => 12,
                'theater' => 30,
                'cocktail' => '',
                'cabaret' => '',                            //venue 15
                'daily_rate' => 3480,
                'hotel_id' => 3,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pool Side Residence 304',
                'level' => 'Level 3',
                'size' => 1400,
                'banquet' => 40,
                'classroom' => 40,
                'theater' => 100,
                'cocktail' => 80,
                'cabaret' => '',                            //venue 16
                'daily_rate' => 8120,
                'hotel_id' => 3,

            ]
        );

        //Shangri-La
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom (Sabah + Sarawak)',
                'level' => 'Basement II',
                'size' => 16242,
                'banquet' => 1440,
                'classroom' => 600,
                'theater' => 1800,
                'cocktail' => 1800,
                'cabaret' => '',                            //venue 1
                'daily_rate' => 120000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sabah',
                'level' => 'Basement II',
                'size' => 9741,
                'banquet' => 600,
                'classroom' => 420,
                'theater' => 1100,
                'cocktail' => 700,
                'cabaret' => '',                            //venue 2
                'daily_rate' => 75000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sarawak',
                'level' => 'Basement II',
                'size' => 6501,
                'banquet' => 400,
                'classroom' => 378,
                'theater' => 650,
                'cocktail' => 450,
                'cabaret' => '',                            //venue 3
                'daily_rate' => 45000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Junior Ballroom (Selangor + Melaka)',
                'level' => 'Basement II',
                'size' => 8008,
                'banquet' => 400,
                'classroom' => 200,
                'theater' => 300,
                'cocktail' => 400,
                'cabaret' => '',                            //venue 4
                'daily_rate' => 26000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Selangor room (Kedah+Selangor 1+Perak)',
                'level' => 'Basement II',
                'size' => 4833,
                'banquet' => 340,
                'classroom' => 160,
                'theater' => 270,
                'cocktail' => 360,
                'cabaret' => '',                            //venue 5
                'daily_rate' => '',
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Kedah',
                'level' => 'Basement II',
                'size' => 1614,
                'banquet' => 100,
                'classroom' => 87,
                'theater' => 140,
                'cocktail' => 120,
                'cabaret' => '',                            //venue 6
                'daily_rate' => 6000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Selangor',
                'level' => 'Basement II',
                'size' => 1614,
                'banquet' => 100,
                'classroom' => 87,
                'theater' => 140,
                'cocktail' => 120,
                'cabaret' => '',                            //venue 7
                'daily_rate' => 6000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Perak',
                'level' => 'Basement II',
                'size' => 1614,
                'banquet' => 100,
                'classroom' => 87,
                'theater' => 140,
                'cocktail' => 120,
                'cabaret' => '',                            //venue 8
                'daily_rate' => 6000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Melaka',
                'level' => 'Basement II',
                'size' => 3143,
                'banquet' => 200,
                'classroom' => 180,
                'theater' => 374,
                'cocktail' => 200,
                'cabaret' => '',                            //venue 9
                'daily_rate' => 8000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Perlis',
                'level' => 'Basement II',
                'size' => 484,
                'banquet' => 27,
                'classroom' => 18,
                'theater' => 30,
                'cocktail' => 25,
                'cabaret' => '',                            //venue 10
                'daily_rate' => '',
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sabah Ante',
                'level' => 'Basement II',
                'size' => 861,
                'banquet' => 40,
                'classroom' => 36,
                'theater' => 80,
                'cocktail' => '',
                'cabaret' => '',                            //venue 11
                'daily_rate' => '',
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Johor 1/2/3',
                'level' => 'Lower Lobby',
                'size' => 656,
                'banquet' => 40,
                'classroom' => 33,
                'theater' => 60,
                'cocktail' => 45,
                'cabaret' => '',                            //venue 12
                'daily_rate' => '',
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Johor (1+2+3)',
                'level' => 'Lower Lobby',
                'size' => 1980,
                'banquet' => 120,
                'classroom' => 100,
                'theater' => 160,
                'cocktail' => '',
                'cabaret' => '',                            //venue 13
                'daily_rate' => '',
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Johor (1+2+3+4+5+6)',
                'level' => 'Lower Lobby',
                'size' => 4413,
                'banquet' => 340,
                'classroom' => 160,
                'theater' => 270,
                'cocktail' => 360,
                'cabaret' => '',                            //venue 14
                'daily_rate' => 20000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Johor 1+4 / 2+5 / 3+6)',
                'level' => 'Lower Lobby',
                'size' => 1474,
                'banquet' => 100,
                'classroom' => 87,
                'theater' => 140,
                'cocktail' => 120,
                'cabaret' => '',                            //venue 15
                'daily_rate' => 6000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Kelantan',
                'level' => 'Lower Lobby',
                'size' => 936,
                'banquet' => 50,
                'classroom' => 45,
                'theater' => 80,
                'cocktail' => 70,
                'cabaret' => '',                            //venue 16
                'daily_rate' => 4000,
                'hotel_id' => 4,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Penang',
                'level' => 'Lower Lobby',
                'size' => 1076,
                'banquet' => 50,
                'classroom' => 48,
                'theater' => 90,
                'cocktail' => 80,
                'cabaret' => '',                            //venue 17
                'daily_rate' => 4000,
                'hotel_id' => 4,

            ]
        );

        //EQ Kuala Lumpur
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sapphire 1 , (Level 1)',
                'level' => '',
                'size' => '',
                'banquet' => 120,
                'classroom' => 80,
                'theater' => 90,
                'cocktail' => 120,
                'cabaret' => 100,                            //venue 1
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sapphire 2 , (Level 1)',
                'level' => '',
                'size' => '',
                'banquet' => 140,
                'classroom' => 110,
                'theater' => 90,
                'cocktail' => 140,
                'cabaret' => 120,                            //venue 2
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sapphire 3 , (Level 1)',
                'level' => '',
                'size' => '',
                'banquet' => 220,
                'classroom' => 140,
                'theater' => 144,
                'cocktail' => 220,
                'cabaret' => 160,                            //venue 3
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Diamond Ballroom , (Level 1)',
                'level' => '',
                'size' => '',
                'banquet' => 800,
                'classroom' => 460,
                'theater' => 468,
                'cocktail' => 800,
                'cabaret' => 600,                            //venue 4
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Cluster 1 , (Level 3)',
                'level' => '',
                'size' => '',
                'banquet' => 140,
                'classroom' => 90,
                'theater' => 90,
                'cocktail' => 140,
                'cabaret' => 100,                            //venue 5
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Cluster 2 , (Level 3)',
                'level' => '',
                'size' => '',
                'banquet' => 140,
                'classroom' => 60,
                'theater' => 90,
                'cocktail' => 140,
                'cabaret' => 100,                            //venue 6
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Conservatory , (Level 3)',
                'level' => '',
                'size' => '',
                'banquet' => 280,
                'classroom' => 180,
                'theater' => 270,
                'cocktail' => 280,
                'cabaret' => 240,                            //venue 7
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Huddle 1 , (Level 3)',
                'level' => '',
                'size' => '',
                'banquet' => 24,
                'classroom' => 20,
                'theater' => 24,
                'cocktail' => 20,
                'cabaret' => '',                            //venue 8
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Huddle 2 , (Level 3)',
                'level' => '',
                'size' => '',
                'banquet' => 24,
                'classroom' => 20,
                'theater' => 24,
                'cocktail' => 20,
                'cabaret' => '',                            //venue 9
                'daily_rate' => '',
                'hotel_id' => 5,

            ]
        );

        //Four Seasons
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom',
                'level' => '',
                'size' => 8352,
                'banquet' => 540,
                'classroom' => 540,
                'theater' => 1080,
                'cocktail' => 950,
                'cabaret' => '',                            //venue 1
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 1',
                'level' => '',
                'size' => 2736,
                'banquet' => 160,
                'classroom' => 144,
                'theater' => 323,
                'cocktail' => 250,
                'cabaret' => '',                            //venue 2
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 2',
                'level' => '',
                'size' => 2736,
                'banquet' => 180,
                'classroom' => 156,
                'theater' => 380,
                'cocktail' => 300,
                'cabaret' => '',                            //venue 3
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 3',
                'level' => '',
                'size' => 2880,
                'banquet' => 180,
                'classroom' => 162,
                'theater' => 380,
                'cocktail' => 300,
                'cabaret' => '',                            //venue 4
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 1 & 2',
                'level' => '',
                'size' => 5472,
                'banquet' => 360,
                'classroom' => 378,
                'theater' => 722,
                'cocktail' => '',
                'cabaret' => '',                            //venue 5
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 2 & 3',
                'level' => '',
                'size' => 5616,
                'banquet' => 360,
                'classroom' => 378,
                'theater' => 760,
                'cocktail' => '',
                'cabaret' => '',                            //venue 6
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom Foyer',
                'level' => '',
                'size' => 3520,
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => 600,
                'cabaret' => '',                            //venue 7
                'daily_rate' => '',
                'hotel_id' => 6,

            ]
        );

        //The Ruma Hotel & Residence
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Bilik I',
                'level' => 'Mezzanine Floor',
                'size' => 1077,
                'banquet' => 80,
                'classroom' => 63,
                'theater' => 100,
                'cocktail' => 100,
                'cabaret' => '',                            //venue 1
                'daily_rate' => '',
                'hotel_id' => 7,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Bilik II',
                'level' => 'Mezzanine Floor',
                'size' => 808,
                'banquet' => 60,
                'classroom' => 45,
                'theater' => 78,
                'cocktail' => 80,
                'cabaret' => '',                            //venue 2
                'daily_rate' => '',
                'hotel_id' => 7,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pavilion I',
                'level' => 'Level 6',
                'size' => 711,
                'banquet' => 40,
                'classroom' => 24,
                'theater' => 60,
                'cocktail' => 50,
                'cabaret' => '',                            //venue 3
                'daily_rate' => '',
                'hotel_id' => 7,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pavilion II',
                'level' => 'Level 6',
                'size' => 808,
                'banquet' => 40,
                'classroom' => 30,
                'theater' => 70,
                'cocktail' => 70,
                'cabaret' => '',                            //venue 4
                'daily_rate' => '',
                'hotel_id' => 7,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'The Pavilion',
                'level' => 'Level 6',
                'size' => 1519,
                'banquet' => 80,
                'classroom' => 54,
                'theater' => 130,
                'cocktail' => 120,
                'cabaret' => '',                            //venue 5
                'daily_rate' => '',
                'hotel_id' => 7,

            ]
        );

        //InterContinental Kuala Lumpur
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom',
                'level' => 'Level 2',
                'size' => 10366,
                'banquet' => 800,
                'classroom' => 600,
                'theater' => 1300,
                'cocktail' => 500,
                'cabaret' => '',                            //venue 1
                'daily_rate' => 55000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 1',
                'level' => 'Level 2',
                'size' => 3606,
                'banquet' => 240,
                'classroom' => 170,
                'theater' => 400,
                'cocktail' => 200,
                'cabaret' => '',                            //venue 2
                'daily_rate' => 30000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 2',
                'level' => 'Level 2',
                'size' => 3154,
                'banquet' => 200,
                'classroom' => 170,
                'theater' => 300,
                'cocktail' => 180,
                'cabaret' => '',                            //venue 3
                'daily_rate' => 30000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom 3',
                'level' => 'Level 2',
                'size' => 3606,
                'banquet' => 240,
                'classroom' => 170,
                'theater' => 400,
                'cocktail' => 200,
                'cabaret' => '',                            //venue 4
                'daily_rate' => 30000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Junior Ballroom',
                'level' => 'Level 2',
                'size' => 3391,
                'banquet' => 230,
                'classroom' => 180,
                'theater' => 300,
                'cocktail' => 180,
                'cabaret' => '',                            //venue 5
                'daily_rate' => 25000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Junior Ballroom 1',
                'level' => 'Level 2',
                'size' => '',
                'banquet' => 100,
                'classroom' => 70,
                'theater' => 120,
                'cocktail' => 150,
                'cabaret' => '',                            //venue 6
                'daily_rate' => '',
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Junior Ballroom 2',
                'level' => 'Level 2',
                'size' => '',
                'banquet' => 100,
                'classroom' => 70,
                'theater' => 120,
                'cocktail' => 150,
                'cabaret' => '',                            //venue 7
                'daily_rate' => '',
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Sakura',
                'level' => 'Level 2',
                'size' => 657,
                'banquet' => 30,
                'classroom' => 20,
                'theater' => 25,
                'cocktail' => 40,
                'cabaret' => '',                            //venue 8
                'daily_rate' => 4000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Lotus',
                'level' => 'Level 2',
                'size' => 904,
                'banquet' => 50,
                'classroom' => 30,
                'theater' => 65,
                'cocktail' => 40,
                'cabaret' => '',                            //venue 9
                'daily_rate' => 4000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Orchid',
                'level' => 'Level 2',
                'size' => 624,
                'banquet' => 40,
                'classroom' => 25,
                'theater' => 40,
                'cocktail' => 35,
                'cabaret' => '',                            //venue 10
                'daily_rate' => 4000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Dahlia',
                'level' => 'Level 2',
                'size' => 667,
                'banquet' => 40,
                'classroom' => 25,
                'theater' => 40,
                'cocktail' => 35,
                'cabaret' => '',                            //venue 11
                'daily_rate' => 4000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Bunga Raya',
                'level' => 'Level 2',
                'size' => 883,
                'banquet' => 50,
                'classroom' => 40,
                'theater' => 70,
                'cocktail' => 60,
                'cabaret' => '',                            //venue 12
                'daily_rate' => 8000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Lavender',
                'level' => 'Level 1',
                'size' => 1076,
                'banquet' => 40,
                'classroom' => 30,
                'theater' => 50,
                'cocktail' => 30,
                'cabaret' => '',                            //venue 13
                'daily_rate' => 6000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Tulip',
                'level' => 'Level 1',
                'size' => 1130,
                'banquet' => 50,
                'classroom' => 36,
                'theater' => 60,
                'cocktail' => 50,
                'cabaret' => '',                            //venue 14
                'daily_rate' => 7000,
                'hotel_id' => 8,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Jasmine',
                'level' => 'Level 1',
                'size' => 388,
                'banquet' => 10,
                'classroom' => 15,
                'theater' => 32,
                'cocktail' => '',
                'cabaret' => '',                            //venue 15
                'daily_rate' => 6000,
                'hotel_id' => 8,

            ]
        );

        //Pullman Kuala Lumpur City Centre
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Grand Ballroom',
                'level' => 'Level 3',
                'size' => 6340,
                'banquet' => 420,
                'classroom' => 432,
                'theater' => 1000,
                'cocktail' => '',
                'cabaret' => '',                            //venue 1
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman One',
                'level' => 'Level 3',
                'size' => 3175,
                'banquet' => 160,
                'classroom' => 216,
                'theater' => 440,
                'cocktail' => '',
                'cabaret' => '',                            //venue 2
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Two',
                'level' => 'Level 3',
                'size' => 3175,
                'banquet' => 160,
                'classroom' => 216,
                'theater' => 440,
                'cocktail' => '',
                'cabaret' => '',                            //venue 3
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Ballroom',
                'level' => 'Level 3',
                'size' => 5403,
                'banquet' => 260,
                'classroom' => 315,
                'theater' => 320,
                'cocktail' => '',
                'cabaret' => '',                            //venue 4
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Three',
                'level' => 'Level 3',
                'size' => 1701,
                'banquet' => 60,
                'classroom' => 54,
                'theater' => 70,
                'cocktail' => '',
                'cabaret' => '',                            //venue 5
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Four',
                'level' => 'Level 3',
                'size' => 775,
                'banquet' => 40,
                'classroom' => 33,
                'theater' => 50,
                'cocktail' => '',
                'cabaret' => '',                            //venue 6
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Five',
                'level' => 'Level 3',
                'size' => 958,
                'banquet' => 50,
                'classroom' => 33,
                'theater' => 50,
                'cocktail' => '',
                'cabaret' => '',                            //venue 7
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Six',
                'level' => 'Level 3',
                'size' => 958,
                'banquet' => 50,
                'classroom' => 33,
                'theater' => 50,
                'cocktail' => '',
                'cabaret' => '',                            //venue 8
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Seven',
                'level' => 'Level 3',
                'size' => 678,
                'banquet' => 40,
                'classroom' => 33,
                'theater' => 50,
                'cocktail' => '',
                'cabaret' => '',                            //venue 9
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Eight',
                'level' => 'Level 3',
                'size' => 936,
                'banquet' => 40,
                'classroom' => 33,
                'theater' => 50,
                'cocktail' => '',
                'cabaret' => '',                            //venue 10
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Nine',
                'level' => 'Level 3',
                'size' => 301,
                'banquet' => 20,
                'classroom' => 15,
                'theater' => 18,
                'cocktail' => '',
                'cabaret' => '',                            //venue 11
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Ten',
                'level' => 'Level 3',
                'size' => 409,
                'banquet' => 30,
                'classroom' => 18,
                'theater' => 30,
                'cocktail' => '',
                'cabaret' => '',                            //venue 12
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pullman Eleven',
                'level' => 'Level 3',
                'size' => 495,
                'banquet' => 30,
                'classroom' => 18,
                'theater' => 30,
                'cocktail' => '',
                'cabaret' => '',                            //venue 13
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Pre Function',
                'level' => 'Level 3',
                'size' => 2691,
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => '',                            //venue 14
                'daily_rate' => '',
                'hotel_id' => 9,

            ]
        );

        //Traders
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Level 1',
                'level' => '',
                'size' => 80,
                'banquet' => 60,
                'classroom' => 36,
                'theater' => 40,
                'cocktail' => '',
                'cabaret' => '',                            //venue 1
                'daily_rate' => '',
                'hotel_id' => 10,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Traders Room 1',
                'level' => '',
                'size' => 30,
                'banquet' => 15,
                'classroom' => 24,
                'theater' => 30,
                'cocktail' => '',
                'cabaret' => '',                            //venue 2
                'daily_rate' => '',
                'hotel_id' => 10,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Traders Room 2',
                'level' => '',
                'size' => 40,
                'banquet' => 25,
                'classroom' => 24,
                'theater' => 40,
                'cocktail' => '',
                'cabaret' => '',                            //venue 3
                'daily_rate' => '',
                'hotel_id' => 10,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Traders Room 3',
                'level' => '',
                'size' => 40,
                'banquet' => 25,
                'classroom' => 24,
                'theater' => 40,
                'cocktail' => '',
                'cabaret' => '',                            //venue 4
                'daily_rate' => '',
                'hotel_id' => 10,

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Executive Boardroom',
                'level' => '',
                'size' => 21,
                'banquet' => 12,
                'classroom' => 12,
                'theater' => 21,
                'cocktail' => '',
                'cabaret' => '',                            //venue 5
                'daily_rate' => '',
                'hotel_id' => 10,

            ]
        );

        // Kuala Lumpur Convention Center
        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 1',
                'level' => '',
                'size' => 26922,
                'banquet' => 1700,
                'classroom' => 1512,
                'theater' => 2550,
                'cocktail' => 3100,
                'cabaret' => 1020,                            //venue 1
                'booth_capacity' => 148,
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 2',
                'level' => '',
                'size' => 25092,
                'banquet' => 1550,
                'classroom' => 1320,
                'theater' => 2160,
                'cocktail' => 2900,
                'cabaret' => 930,                            //venue 2
                'booth_capacity' => 142,
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 1 & 2',
                'level' => '',
                'size' => '',
                'banquet' => 3490,
                'classroom' => 2859,
                'theater' => 4748,
                'cocktail' => 6000,
                'cabaret' => 1920,                            //venue 3
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 4',
                'level' => '',
                'size' => 22285,
                'banquet' => 1340,
                'classroom' => 1116,
                'theater' => 1938,
                'cocktail' => 2500,
                'cabaret' => 804,                            //venue 4
                'booth_capacity' => 126,
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 5',
                'level' => '',
                'size' => 24156,
                'banquet' => 1510,
                'classroom' => 1344,
                'theater' => 1990,
                'cocktail' => 2800,
                'cabaret' => 906,                            //venue 5
                'booth_capacity' => 132,
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 4 & 5',
                'level' => '',
                'size' => '',
                'banquet' => 3020,
                'classroom' => 2484,
                'theater' => 3883,
                'cocktail' => 5300,
                'cabaret' => 1680,                            //venue 6
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 1 - 5',
                'level' => '',
                'size' => 104480,
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => '',                            //venue 7
                'booth_capacity' => 564,
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 6 A',
                'level' => '',
                'size' => 8020,
                'banquet' => 220,
                'classroom' => 342,
                'theater' => 692,
                'cocktail' => '',
                'cabaret' => 224,                            //venue 8
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 7 B',
                'level' => '',
                'size' => 8132,
                'banquet' => 230,
                'classroom' => 348,
                'theater' => 756,
                'cocktail' => '',
                'cabaret' => 224,                            //venue 9
                'booth_capacity' => 182,
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 8 C',
                'level' => '',
                'size' => 14642,
                'banquet' => 480,
                'classroom' => 492,
                'theater' => 1476,
                'cocktail' => '',
                'cabaret' => 400,                            //venue 10
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Exhibition Hall 6 A - 8C',
                'level' => '',
                'size' => 30794,
                'banquet' => 1150,
                'classroom' => 1548,
                'theater' => 3413,
                'cocktail' => '',
                'cabaret' => 1008,                            //venue 11
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Plenary Hall Auditorium',
                'level' => 'Balcony',
                'size' => 945,
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => 1008,                            //venue 12
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Plenary Hall Auditorium',
                'level' => 'Stalls Only',
                'size' => 2046,
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => 470,                            //venue 13
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom Hall 1',
                'level' => '',
                'size' => 1500,
                'banquet' => 1000,
                'classroom' => 630,
                'theater' => 1100,
                'cocktail' => '',
                'cabaret' => 1500,                            //venue 14
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom Hall 2',
                'level' => '',
                'size' => 1500,
                'banquet' => 1000,
                'classroom' => 630,
                'theater' => 1100,
                'cocktail' => '',
                'cabaret' => 1500,                            //venue 15
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Ballroom Hall 1 & 2',
                'level' => '',
                'size' => 3000,
                'banquet' => 2000,
                'classroom' => 1260,
                'theater' => 2200,
                'cocktail' => '',
                'cabaret' => 3000,                            //venue 16
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Banquet Hall',
                'level' => '',
                'size' => 950,
                'banquet' => 390,
                'classroom' => 360,
                'theater' => 800,
                'cocktail' => '',
                'cabaret' => 950,                            //venue 17
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Conference Hall 1',
                'level' => '',
                'size' => 650,
                'banquet' => 300,
                'classroom' => 252,
                'theater' => 510,
                'cocktail' => '',
                'cabaret' => 650,                            //venue 18
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Conference Hall 2',
                'level' => '',
                'size' => 384,
                'banquet' => 480,
                'classroom' => 384,
                'theater' => 820,
                'cocktail' => '',
                'cabaret' => 384,                            //venue 19
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Conference Hall 3',
                'level' => '',
                'size' => 252,
                'banquet' => 300,
                'classroom' => 252,
                'theater' => 510,
                'cocktail' => '',
                'cabaret' => 252,                            //venue 20
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Conference Hall 1,2 & 3',
                'level' => '',
                'size' => 2280,
                'banquet' => 1080,
                'classroom' => 888,
                'theater' => 1836,
                'cocktail' => '',
                'cabaret' => 2280,                            //venue 21
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );

        DB::table('event_spaces')->insert(
            [

                'venue' => 'Plenary Theater Auditorium',
                'level' => '',
                'size' => 470,
                'banquet' => '',
                'classroom' => '',
                'theater' => '',
                'cocktail' => '',
                'cabaret' => 470,                            //venue 22
                'booth_capacity' => '',
                'daily_rate' => '',
                'hotel_id' => '',

            ]
        );
    }
}
