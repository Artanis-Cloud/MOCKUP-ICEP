<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venues;
use App\Models\Hotel;
use App\Models\EventSpace;

class VenueController extends Controller
{
    public function hotel()
    {
        $hotel = Venues::where('type','hotel')->get();
        return view('Venue.hotel',compact('hotel'));
    }

    public function hall()
    {
        $hall = Venues::where('type','hall')->get();
        return view('Venue.hall',compact('hall'));
    }

    public function comparison()
    {
        return view('comparison');
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
            'daily_rates' =>$data['daily_rates'],
            'hotel_id' =>$data['hotel_name'],
            'thumbnail' =>$uploaded_gambar,

            ]);
        }

    public function compare(Request $request){
        // dd($request->all());
        $hall = Venues::where('type','hall')->get();
        $hall1 = Venues::where('name',$request->venue1)->get();
        $hall2 = Venues::where('name',$request->venue2)->get();
        // dd($hall2);

        return view('Venue.hallcompare',compact('hall','hall1','hall2'));

    }

    public function comparehotel(Request $request){
        // dd($request->all());
        $hotel = Venues::where('type','hotel')->get();
        $hotel1 = Venues::where('name',$request->venue1)->get();
        $hotel2 = Venues::where('name',$request->venue2)->get();
        // dd($hall2);

        return view('Venue.hotelcompare',compact('hotel','hotel1','hotel2'));

    }

    public function delete($id){

        $delete = Venues::findorfail($id);
        $delete -> delete();

        return view('admin.list_venue');

    }

    public function details()
    {
        return view('venue.details');
    }



}
