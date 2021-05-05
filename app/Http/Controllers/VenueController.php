<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venues;
use App\Models\Hotel;
use App\Models\EventSpace;
use App\Models\HotelRoom;

class VenueController extends Controller
{
    public function hotel()
    {

        // $hotel = Hotel::get();
        return view('Venue.hotel');

    }

    public function hall()
    {
        $eventspace = EventSpace::get();
        return view('Venue.hall',compact('eventspace'));
    }

    public function comparison()
    {
        $room = HotelRoom::get();
        $hotel = Hotel::get();
        return view('comparison',compact('room','hotel'));
    }


    public function contact()
    {
        return view('contact');
    }

    public function submitHotel(Request $request){
        // dd($request->all());
        $uploaded_gambar = $request->file('thumbnail')->store('public/uploads');
        event($venue = $this->addHotel($request->all(),$uploaded_gambar));

        return redirect()->route('venue');
    }

    public function addHotel(array $data,$uploaded_gambar){
            return Hotel::create([
            'hotel_name' => $data['hotel_name'],
            'car_radius' => $data['car_radius'],
            'walking_radius' => $data['walking_radius'],
            'room_type' =>$data['room_type'],
            'single_rate' => $data['single_rate'],
            'double_rate' => $data['double_rate'],
            'corporate_rate' =>$data['corporate_rate'],
            'thumbnail' =>$uploaded_gambar,

            ]);
        }


    public function submitEventSpace(Request $request){
        $uploaded_gambar = $request->file('thumbnail')->store('public/uploads');
        event($venue = $this->addEventSpace($request->all(),$uploaded_gambar));

        return redirect()->route('venue');
    }

    public function addEventSpace(array $data,$uploaded_gambar){
            return EventSpace::create([
            'venue' => $data['venue'],
            'size' => $data['size'],
            'capacity' => $data['capacity'],
            'banquet' =>$data['banquet'],
            'classroom' => $data['classroom'],
            'theater' => $data['theater'],
            'cocktail' =>$data['cocktail'],
            'daily_rate' =>$data['daily_rates'],
            'hotel_id' =>$data['hotel_name'],
            'thumbnail' =>$uploaded_gambar,

            ]);
        }

    public function details()
    {
        return view('venue.details');
    }



}
