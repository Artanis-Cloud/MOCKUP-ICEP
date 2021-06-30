<?php

namespace App\Exports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\FromCollection;

class HotelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // dd(HotelRoom::with('hotels')->first());
        return Hotel::all();
    }

    public function headings(): array
    {
        return [
            'hotel_name',
            'car_radius',
            'walking_radius',
            'thumbnail',
            'longitude',
            'latitude',
        ];
    }

    public function map($hotel): array
    {
        return [
            $hotel->hotel_name,
            $hotel->car_radius,
            $hotel->walking_radius,
            $hotel->thumbnail,
            $hotel->longitude,
            $hotel->latitude
             ];
    }
}
