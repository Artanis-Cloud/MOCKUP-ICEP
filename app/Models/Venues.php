<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venues extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'postcode',
        'state',
        'type',
        'number_of_pax',
        'price',
        'image',
        'status',
        'user_id',
    ];
}
