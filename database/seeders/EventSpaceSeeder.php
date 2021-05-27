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
        DB::table('event_spaces')-> insert(
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

        DB::table('event_spaces')-> insert(
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

        DB::table('event_spaces')-> insert(
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

        DB::table('event_spaces')-> insert(
            [

            'venue' => 'Grand Ballroom Foyer',
            'level' => 'Level 1',
            'size' => 7795,
            'banquet' => 570,
            'classroom' => 0,
            'theater' => 0,
            'cocktail' => 900,
            'cabaret' => '',                            //venue 3
            'booth_capacity' => '',
            'daily_rate' => '',
            'hotel_id' => 1,

            ]
        );

    }
}
