<?php

namespace App\Exports;

use App\Models\HotelRoom;
use Maatwebsite\Excel\Concerns\FromCollection;

class HotelRoomExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // dd(HotelRoom::with('hotels')->first());
        return HotelRoom::with('hotels')->get();
    }

    public function headings(): array
    {
        return [
            'room_type',
            'size',
            'type_of_bed',
            'view',
            'single_rate',
            'double_rate',
            'corporate_rate',
            'benefits',
            'hotel_id'
        ];
    }

    public function map($hotelroom): array
    {
        return [
            $hotelroom->room_type,
            $hotelroom->size,
            $hotelroom->type_of_bed,
            $hotelroom->view,
            $hotelroom->single_rate,
            $hotelroom->double_rate,
            $hotelroom->corporate_rate,
            $hotelroom->benefits,
            $hotelroom->hotel_id
        ];
    }
}
