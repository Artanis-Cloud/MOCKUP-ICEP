<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Gallery extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'photos',
        'room_id',
        'eventspace_id'
    ];

    public function rooms(){
        return $this->belongsTo(HotelRoom::class, 'room_id');

    }

    public function spaceevent(){
        return $this->belongsTo(EventSpace::class, 'eventspace_id');

    }
}
