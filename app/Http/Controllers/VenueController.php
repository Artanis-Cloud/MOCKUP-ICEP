<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venues;

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

    public function gallery()
    {
        return view('gallery');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submit(Request $request){
        // dd($request->all());
        $uploaded_gambar = $request->file('image')->store('public/uploads');
        event($venue = $this->add($request->all(),$uploaded_gambar));

        return redirect()->route('venue');
    }

    public function add(array $data,$uploaded_gambar){
        $status = "Active";
          return Venues::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'address' => $data['address'],
            'postcode' =>$data['postcode'],
            'state' => $data['state'],
            'type' => $data['type'],
            'number_of_pax' =>$data['number_of_pax'],
            'price' => $data['price'],
            'image' => $uploaded_gambar,
            'status' => $status
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



}
