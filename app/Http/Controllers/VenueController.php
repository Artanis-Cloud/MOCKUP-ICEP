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

        return redirect()->route('venue.add');
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

}
