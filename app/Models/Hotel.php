<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class Hotel extends Model implements Auditable

{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

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
        return $this->hasMany('App\EventSpace');
    }
}
