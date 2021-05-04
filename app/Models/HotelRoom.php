<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_type',
        'size',
        'type_of_bed',
        'view',
        'single_rate',
        'double_rate',
        'corporate_rate',
        'benefits',
        'pictures',
        'hotel_id'
    ];

    public function hotels(){
        return $this->belongsTo(Hotel::class, 'hotel_id');

    }
}
