<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use App\Models\HotelRoom;


class Hotel extends Model implements Auditable

{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'hotel_name',
        'car_radius',
        'walking_radius',
        'thumbnail',
        'longitude',
        'latitude'
    ];

    public function events(){
        return $this->hasMany('App\EventSpace');
    }
    public function rooms(){
        return $this->hasMany('App\HotelRoom');
    }
}
