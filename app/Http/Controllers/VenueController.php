<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venues;
use App\Models\Hotel;
use App\Models\Gallery;
use App\Models\EventSpace;
use App\Models\HotelRoom;

class VenueController extends Controller
{
    public function hotel()
    {
        // dd('rr');
        $hotels = Hotel::get();
        $room_type = HotelRoom::get();
        $bed_type = HotelRoom::distinct('type_of_bed')->get('type_of_bed');
        // dd($bed_type);
        return view('Venue.hotel', compact('hotels','room_type','bed_type'));

    }

    public function roomDetail(Request $request)
    {
        // dd($request->all());
        $hotel = HotelRoom::where('hotel_id',$request->hotel_id)->get();
        $rooms = HotelRoom::where('id', $request->room_id)->get();
        $photos = Gallery::where('room_id', $request->room_id)->get();
        $map = Hotel::where('id',$request->hotel_id)->get();
        // dd($hotel);

        return view('venue.room_details', compact('rooms','photos','hotel','map'));
    }

    public function eventspaceDetail(Request $request)
    {
        // dd($request->all());
        $hotel = EventSpace::where('hotel_id',$request->hotel_id)->get();
        $eventspace=EventSpace::where('id', $request->eventspace_id)->get();
        $photos=Gallery::where('eventspace_id', $request->eventspace_id)->get();
        $map = Hotel::where('id',$request->hotel_id)->get();
        // dd($eventspace);

       return view('venue.eventspace_details', compact('eventspace','photos','hotel','map'));
    }

    public function roomFilter(Request $request)
    {
        // dd($request->all());
        $rooms=HotelRoom::where('size','<=', $request->size)
                        ->where('type_of_bed',$request->type_of_bed)
                        ->where('single_rate','<=',$request->single)
                        ->where('double_rate','<=',$request->double)
                        ->where('corporate_rate','<=',$request->corporate)->get();
        // dd($rooms);
        $hotels=Hotel::distinct('id')->get();
        // dd($hotels);
        $bed_type = HotelRoom::distinct('type_of_bed')->get('type_of_bed');


        return view('Venue.hotel_filter', compact('hotels','bed_type','rooms'));
    }

    public function eventspaceFilter(Request $request)
    {
        // dd($request->all());
        $eventspace=EventSpace::where('size','<=', $request->size)
                        ->where('banquet','<=',$request->banquet)
                        ->where('classroom','<=',$request->classroom)
                        ->where('cocktail','<=',$request->cocktail)
                        ->where('theater','<=',$request->theater)
                        ->where('cabaret','<=',$request->cabaret)
                        ->where('booth_capacity','<=',$request->booth)->get();

        return view('Venue.eventspace_filter', compact('eventspace'));
    }

    public function eventspaceDetails($id)
    {
        $eventspace_id = EventSpace::find($id);
        // dd($eventspace_id);
        $eventspace = EventSpace::where('id', $eventspace_id->id)->get();
        // dd($eventspace);
        $photos = Gallery::where('eventspace_id', $eventspace_id->id)->get();

       return view('venue.eventspace_details', compact('eventspace','photos'));
    }
    public function eventspace()
    {
        $eventspace = EventSpace::get();
        $hotels = Hotel::get();
        return view('Venue.eventspace',compact('eventspace','hotels'));
    }


    public function comparisonHotel()
    {
        $rooms = HotelRoom::get();
        $hotels = Hotel::get();
        return view('Hotel.comparison',compact('rooms','hotels'));
    }

    public function comparisonEventSpace()
    {
        $eventspace = EventSpace::get();
        $hotel = Hotel::get();
        return view('EventSpace.comparison',compact('eventspace','hotel'));
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
        $eventspace = EventSpace::get();
        $hotel = Hotel::get();
        // dd($room);

        $room_1 = EventSpace::where('hotel_id',$request->first_hotel)->get();
        $room_2 = EventSpace::where('hotel_id',$request->second_hotel)->get();
        $room_3 = EventSpace::where('id',$request->third_hotel)->get();
        //  dd($room_3);
        $hotel_1 = Hotel::where('id',$request->first_hotel)->first();
        $hotel_2 = Hotel::where('id',$request->second_hotel)->first();
        $hotel_3 = EventSpace::where('id',$request->third_hotel)->first();
        // dd($hotel_1);
        return view('EventSpace.compared',compact('eventspace','hotel','hotel_1','hotel_2','hotel_3','room_1','room_2','room_3'));
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
