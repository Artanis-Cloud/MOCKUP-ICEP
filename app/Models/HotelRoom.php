<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class HotelRoom extends Model implements Auditable
{
    Use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
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

    public function events(){
        return $this->hasMany('App\EventSpace');
    }
    public function rooms(){
        return $this->hasMany('App\HotelRoom');
    }
}
