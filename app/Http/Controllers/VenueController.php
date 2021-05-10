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
        // dd('rr');
        $hotels = Hotel::get();
        return view('Venue.hotel', compact('hotels'));

    }

    public function hall()
    {
        $eventspace = EventSpace::get();
        return view('Venue.hall',compact('eventspace'));
    }

    public function comparisonHotel()
    {
        $room = HotelRoom::get();
        $hotel = Hotel::get();
        return view('Hotel.comparison',compact('room','hotel'));
    }

    public function comparisonEventSpace()
    {
        $room = HotelRoom::get();
        $hotel = Hotel::get();
        return view('EventSpace.comparison',compact('room','hotel'));
    }

    public function compareHotel(Request $request)
    {
        // dd($request->all());
        $room = HotelRoom::get();
        $hotel = Hotel::get();
        // dd($room);

        $room_1 = HotelRoom::where('hotel_id',$request->first_hotel)->get();
        $room_2 = HotelRoom::where('hotel_id',$request->second_hotel)->get();
        $room_3 = HotelRoom::where('hotel_id',$request->third_hotel)->get();
        //  dd($room_3);
        $hotel_1 = Hotel::where('id',$request->first_hotel)->first();
        $hotel_2 = Hotel::where('id',$request->second_hotel)->first();
        $hotel_3 = Hotel::where('id',$request->third_hotel)->first();
        // dd($hotel_1);
        return view('Hotel.compared',compact('room','hotel','hotel_1','hotel_2','hotel_3','room_1','room_2','room_3'));
    }

    public function compareEventSpace(Request $request)
    {
        // dd($request->all());
        $room = HotelRoom::get();
        $hotel = Hotel::get();
        // dd($room);

        $room_1 = HotelRoom::where('hotel_id',$request->first_hotel)->get();
        $room_2 = HotelRoom::where('hotel_id',$request->second_hotel)->get();
        $room_3 = HotelRoom::where('hotel_id',$request->third_hotel)->get();
        //  dd($room_3);
        $hotel_1 = Hotel::where('id',$request->first_hotel)->first();
        $hotel_2 = Hotel::where('id',$request->second_hotel)->first();
        $hotel_3 = Hotel::where('id',$request->third_hotel)->first();
        // dd($hotel_1);
        return view('EventSpace.compared',compact('room','hotel','hotel_1','hotel_2','hotel_3','room_1','room_2','room_3'));
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
