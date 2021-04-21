<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;


class EventSpace extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'venue',
        'size',
        'capacity',
        'banquet',
        'classroom',
        'theater',
        'cocktail',
        'daily_rates',
        'thumbnail',
        'hotel_id'
    ];

    public function hotels(){
        return $this->belongsTo(Hotel::class, 'hotel_id');

    }
}
