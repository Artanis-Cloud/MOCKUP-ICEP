<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function hotel()
    {
        return view('Venue.hotel');
    }

    public function hall()
    {
        return view('Venue.hall');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }
}
