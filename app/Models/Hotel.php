<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name',
        'car_radius',
        'walking_radius',
        'room_type',
        'single_rate',
        'double_rate',
        'corporate_rate',
        'thumbnail'
    ];

    public function events(){
        return $this->hasMany('App\Event_Space');
    }
}
