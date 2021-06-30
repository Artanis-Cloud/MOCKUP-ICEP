<?php

namespace App\Imports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\ToModel;

class HotelImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Hotel([
            'hotel_name'     => $row[1],
            'car_radius'    => $row[2],
            'walking_radius'    => $row[3],
            // 'thumbnail'    => $row[4],
            'longitude'    => $row[5] ?? 0,
            'latitude'    => $row[6] ?? 0

        ]);
    }
}
