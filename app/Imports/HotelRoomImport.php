<?php

namespace App\Imports;

use App\Models\HotelRoom;
use Maatwebsite\Excel\Concerns\ToModel;

class HotelRoomImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new HotelRoom([
            // 'room_type'     => $row[0],
            // 'size'    => $row[1],
            // 'type_of_bed'    => $row[2],
            // 'view'    => $row[3],
            // 'single_rate'    => $row[4],
            // 'double_rate'    => $row[5],
            // 'corporate_rate'    => $row[6],
            // 'benefits'    => $row[7],
            // 'hotel_id'    => $row[8],
            'room_type'     => $row[1],
            'size'    => $row[2],
            'type_of_bed'    => $row[3],
            'view'    => $row[4],
            'single_rate'    => $row[5],
            'double_rate'    => $row[6],
            'corporate_rate'    => $row[7],
            'benefits'    => $row[8],
            'hotel_id'    => $row[10],


        ]);
    }
}
