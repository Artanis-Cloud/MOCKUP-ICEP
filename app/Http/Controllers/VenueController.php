<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
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

    public function hotel_edit($id)
    {
        $hotels = Hotel::find($id);
        return view('admin.hotel_update', compact('hotels'));
    }

    public function hotel_update(Request $request,$id)
    {
        // dd($request->all());
        $this->validatorhotel($request->all())->validate();
        $hotels = Hotel::find($id);
        $hotels->hotel_name = $request->hotel_name;
        $hotels->car_radius = $request->car_radius;
        $hotels->walking_radius = $request->walking_radius;
        $hotels->latitude = $request->latitude;
        $hotels->longitude = $request->longitude;
        if($files = request()->file('thumbnail') != null) {
            // dd($request->gambar_profile);
            $thumbnail = request()->file('thumbnail')->store('public/upload');
            $hotels->thumbnail = $thumbnail;
        }

        $hotels->save();

        $success = 'success';
        $text = 'Hotel has been updated';

        return redirect('/venue/lists')->with($success,$text);

    }

    protected function validatorhotel(array $data)
    {
      return Validator::make($data, [
        'hotel_name'=> ['required','string'],
        'car_radius'=> ['nullable','numeric'],
        'walking_radius'=> ['nullable','numeric'],
        'thumbnail' => ['max:100000'],
      ]);
    }

    public function room_edit($id)
    {
        $rooms = HotelRoom::find($id);
        return view('admin.room_update', compact('rooms'));
    }

    public function room_update(Request $request,$id)
    {
        // dd($request->all());
        $this->validatorroom($request->all())->validate();
        $rooms = HotelRoom::find($id);
        $rooms->room_type = $request->room_type;
        $rooms->size = $request->size;
        $rooms->type_of_bed = $request->type_of_bed;
        $rooms->view = $request->view;
        $rooms->single_rate = $request->single_rate;
        $rooms->double_rate = $request->double_rate;
        $rooms->corporate_rate = $request->corporate_rate;

        $image=Gallery::where('room_id',$id)->get();
        // dd($image);
        if($request->photos != null){
            foreach ($image as $data ) {
                $data->delete();
            }
            foreach($request->photos as $file)
            {
                $file_gambar = new Gallery();
                $originalname = $file->getClientOriginalName();
                $file_gambar->photos = $file->storeAs('public/uploads/', $originalname);
                $file_gambar->room_id = $id;
                $file_gambar->save();
            }
        }

        $rooms->save();

        $success = 'success';
        $text = 'Hotel has been updated';

        return redirect('/venue/lists')->with($success,$text);

    }

    protected function validatorroom(array $data)
  {
      return Validator::make($data, [
        'room_type'=> ['required', 'string'],
        'size'=> ['required', 'numeric'],
        'type_of_bed'=> ['required', 'string'],
        'view'=> ['required', 'string'],
        'single_rate'=> ['nullable', 'numeric'],
        'double_rate'=> ['nullable', 'numeric'],
        'corporate_rate'=> ['nullable', 'numeric'],
        // 'photos_.*' => ['nullable','max:100000'],
      ]);
  }

    public function eventspace_edit($id)
    {
        $eventspace = EventSpace::find($id);
        return view('admin.eventspace_update', compact('eventspace'));
    }

    public function eventspace_update(Request $request,$id)
    {
        // dd($request->all());
        $this->validatoreventspace($request->all())->validate();
        $eventspace = EventSpace::find($id);
        // if($request->hotel_id){
        //     $eventspace->venue = $request->venue;
        //     $eventspace->level = $request->level;
        //     $eventspace->size = $request->size;
        //     $eventspace->banquet = $request->banquet;
        //     $eventspace->classroom = $request->classroom;
        //     $eventspace->theater = $request->theater;
        //     $eventspace->cocktail = $request->cocktail;
        //     $eventspace->cabaret = $request->cabaret;
        //     $eventspace->booth_capacity = $request->booth_capacity;
        //     $eventspace->daily_rate = $request->daily_rate;

        //     $image=Gallery::where('eventspace_id',$id)->get();
        //     // dd($image);
        //     if($request->photos != null){
        //         foreach ($image as $data ) {
        //             $data->delete();
        //         }
        //         foreach($request->photos as $file)
        //         {
        //             $file_gambar = new Gallery();
        //             $originalname = $file->getClientOriginalName();
        //             $file_gambar->photos = $file->storeAs('public/uploads/', $originalname);
        //             $file_gambar->eventspace_id = $id;
        //             $file_gambar->save();
        //         }
        //     }
        //     $eventspace->save();
        // }
        // else{
            $eventspace->venue = $request->venue;
            $eventspace->car_radius = $request->car_radius;
            $eventspace->walking_radius = $request->walking_radius;
            $eventspace->latitude = $request->latitude;
            $eventspace->longitude = $request->longitude;
            $eventspace->level = $request->level;
            $eventspace->size = $request->size;
            $eventspace->banquet = $request->banquet;
            $eventspace->classroom = $request->classroom;
            $eventspace->theater = $request->theater;
            $eventspace->cocktail = $request->cocktail;
            $eventspace->cabaret = $request->cabaret;
            $eventspace->booth_capacity = $request->booth_capacity;
            $eventspace->daily_rate = $request->daily_rate;

            if($files = request()->file('thumbnail') != null) {
                // dd($request->gambar_profile);

                $thumbnail = request()->file('thumbnail')->store('public/upload');
                $eventspace->thumbnail = $thumbnail;
            }

            $image=Gallery::where('eventspace_id',$id)->get();
            // dd($image);
            if($request->photos != null){
                foreach ($image as $data ) {
                    $data->delete();
                }
                foreach($request->photos as $file)
                {
                    $file_gambar = new Gallery();
                    $originalname = $file->getClientOriginalName();
                    $file_gambar->photos = $file->storeAs('public/uploads/', $originalname);
                    $file_gambar->eventspace_id = $id;
                    $file_gambar->save();
                }
            }
            $eventspace->save();
        // }
        $success = 'success';
        $text = 'Hotel has been updated';

        return redirect('/venue/lists')->with($success,$text);

    }
    protected function validatoreventspace(array $data)
    {
        return Validator::make($data, [
            'venue'=> ['required', 'string'],
            'car_radius'=> ['nullable', 'numeric'],
            'walking_radius'=> ['nullable', 'numeric'],
            'latitude'=> ['nullable', 'numeric'],
            'longitude'=> ['nullable', 'numeric'],
            'level'=> ['nullable', 'numeric'],
            'size'=> ['nullable', 'numeric'],
            'banquet'=> ['nullable', 'numeric'],
            'classroom'=> ['nullable', 'numeric'],
            'theater'=> ['nullable', 'numeric'],
            'cocktail'=> ['nullable', 'numeric'],
            'cabaret'=> ['nullable', 'numeric'],
            'booth_capacity'=> ['nullable', 'numeric'],
            'daily_rate'=> ['nullable', 'numeric'],
            // 'thumbnail' => ['nullable','mimes:jpg,bmp,png|max:100000'],
            // 'photos_.*' => ['nullable','mimes:jpg,bmp,png|max:100000'],
        ]);
    }


    public function roomDetail(Request $request)
    {
        // dd($request->all());
        $hotel = HotelRoom::where('hotel_id',$request->hotel_id)->get();
        $rooms = HotelRoom::where('id', $request->room_id)->get();
        $photos = Gallery::where('room_id', $request->room_id)->get();
        $map = Hotel::where('id',$request->hotel_id)->get();
        // dd($hotel);

        return view('Venue.room_details', compact('rooms','photos','hotel','map'));
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
        // foreach($rooms as $data){
        //     $hotels=Hotel::where('id',$data->id)->distinct('id')->get();
        // dd($hotels);

        // }
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

    public function eventspaceDetails(Request $request, $id)
    {
        // dd($request->all());
        $hotels=EventSpace::where('hotel_id', $request->hotel_id)->get();
        $eventspace_id = EventSpace::find($id);
        $eventspace = EventSpace::where('id', $eventspace_id->id)->get();
        $photos = Gallery::where('eventspace_id', $eventspace_id->id)->get();

       return view('Venue.eventspace_details', compact('eventspace','photos','hotels'));
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
