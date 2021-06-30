<?php

namespace App\Exports;

use App\Models\EventSpace;
use Maatwebsite\Excel\Concerns\FromCollection;

class EventSpaceExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // dd(HotelRoom::with('hotels')->first());
        return EventSpace::all();
    }

    public function headings(): array
    {
        return [
            'venue',
            'level',
            'size',
            'banquet',
            'classroom',
            'theater',
            'cocktail',
            'cabaret',
            'booth_capacity',
            'daily_rate',
            'car_radius',
            'walking_radius',
            'thumbnail',
            'longitude',
            'latitude',
            'hotel_id',
        ];
    }

    public function map($eventspace): array
    {
        return [
            $eventspace->venue,
            $eventspace->level,
            $eventspace->size,
            $eventspace->banquet,
            $eventspace->classroom,
            $eventspace->theater,
            $eventspace->cocktail,
            $eventspace->cabaret,
            $eventspace->booth_capacity,
            $eventspace->daily_rate,
            $eventspace->car_radius,
            $eventspace->walking_radius,
            $eventspace->thumbnail,
            $eventspace->longitude,
            $eventspace->latitude,
            $eventspace->hotel_id,

        ];
    }
}
