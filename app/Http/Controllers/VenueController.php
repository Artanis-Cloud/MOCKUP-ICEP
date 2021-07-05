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
        $hotels = Hotel::paginate(9);
        $room_type = HotelRoom::orderby('room_type', 'ASC')->get();
        $bed_type = HotelRoom::distinct('type_of_bed')->get('type_of_bed');
        // dd($bed_type);
        return view('Venue.hotel', compact('hotels', 'room_type', 'bed_type'));
    }

    public function hotel_edit($id)
    {
        $hotels = Hotel::find($id);
        return view('admin.hotel_update', compact('hotels'));
    }

    public function hotel_update(Request $request, $id)
    {
        // dd($request->all());
        $this->validatorhotel($request->all())->validate();
        $hotels = Hotel::find($id);
        $hotels->hotel_name = $request->hotel_name;
        $hotels->car_radius = $request->car_radius;
        $hotels->walking_radius = $request->walking_radius;
        $hotels->latitude = $request->latitude;
        $hotels->longitude = $request->longitude;
        if ($files = request()->file('thumbnail') != null) {
            // dd($request->gambar_profile);
            $thumbnail = request()->file('thumbnail')->store('public/upload');
            $hotels->thumbnail = $thumbnail;
        }

        $hotels->save();

        $success = 'success';
        $text = 'Hotel has been updated';

        return redirect('/venue/lists')->with($success, $text);
    }

    protected function validatorhotel(array $data)
    {
        return Validator::make($data, [
            'hotel_name' => ['required', 'string'],
            'car_radius' => ['nullable', 'string'],
            'walking_radius' => ['nullable', 'string'],
            'thumbnail' => ['max:100000'],
        ]);
    }

    public function room_edit($id)
    {
        $rooms = HotelRoom::find($id);
        return view('admin.room_update', compact('rooms'));
    }

    public function room_update(Request $request, $id)
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

        $image = Gallery::where('room_id', $id)->get();
        // dd($image);
        if ($request->photos != null) {
            foreach ($image as $data) {
                $data->delete();
            }
            foreach ($request->photos as $file) {
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

        return redirect('/venue/lists')->with($success, $text);
    }

    protected function validatorroom(array $data)
    {
        return Validator::make($data, [
            'room_type' => ['required', 'string'],
            'size' => ['required', 'numeric'],
            'type_of_bed' => ['required', 'string'],
            'view' => ['required', 'string'],
            'single_rate' => ['nullable', 'numeric'],
            'double_rate' => ['nullable', 'numeric'],
            'corporate_rate' => ['nullable', 'numeric'],
            // 'photos_.*' => ['nullable','max:100000'],
        ]);
    }

    public function eventspace_edit($id)
    {
        $eventspace = EventSpace::find($id);
        return view('admin.eventspace_update', compact('eventspace'));
    }

    public function eventspace_update(Request $request, $id)
    {
        // dd($request->all());
        $this->validatoreventspace($request->all())->validate();
        $eventspace = EventSpace::find($id);

        $eventspace->venue = $request->venue;
        // $eventspace->car_radius = $request->car_radius;
        // $eventspace->walking_radius = $request->walking_radius;
        // $eventspace->latitude = $request->latitude;
        // $eventspace->longitude = $request->longitude;
        $eventspace->level = $request->level;
        $eventspace->size = $request->size;
        $eventspace->banquet = $request->banquet;
        $eventspace->classroom = $request->classroom;
        $eventspace->theater = $request->theater;
        $eventspace->cocktail = $request->cocktail;
        $eventspace->cabaret = $request->cabaret;
        $eventspace->booth_capacity = $request->booth_capacity;
        $eventspace->daily_rate = $request->daily_rate;

        // if($files = request()->file('thumbnail') != null) {
        //     // dd($request->gambar_profile);

        //     $thumbnail = request()->file('thumbnail')->store('public/upload');
        //     $eventspace->thumbnail = $thumbnail;
        // }

        $image = Gallery::where('eventspace_id', $id)->get();
        // dd($image);
        if ($request->photos != null) {
            foreach ($image as $data) {
                $data->delete();
            }
            foreach ($request->photos as $file) {
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
        $text = 'Event Space has been updated';

        return redirect('/venue/lists')->with($success, $text);
    }
    protected function validatoreventspace(array $data)
    {
        return Validator::make($data, [
            'venue' => ['required', 'string'],
            // 'car_radius'=> ['nullable', 'numeric'],
            // 'walking_radius'=> ['nullable', 'numeric'],
            // 'latitude'=> ['nullable', 'numeric'],
            // 'longitude'=> ['nullable', 'numeric'],
            'level' => ['nullable', 'string'],
            'size' => ['nullable', 'numeric'],
            'banquet' => ['nullable', 'numeric'],
            'classroom' => ['nullable', 'numeric'],
            'theater' => ['nullable', 'numeric'],
            'cocktail' => ['nullable', 'numeric'],
            'cabaret' => ['nullable', 'numeric'],
            'booth_capacity' => ['nullable', 'numeric'],
            'daily_rate' => ['nullable', 'numeric'],
            // 'thumbnail' => ['nullable','mimes:jpg,bmp,png|max:100000'],
            // 'photos_.*' => ['nullable','mimes:jpg,bmp,png|max:100000'],
        ]);
    }


    public function roomDetail(Request $request)
    {
        // dd($request->all());
        $hotel = HotelRoom::where('hotel_id', $request->hotel_id)->get();
        $hotel_name =  Hotel::where('id', $request->hotel_id)->first();
        $rooms = HotelRoom::where('id', $request->room_id)->orderby('room_type', 'ASC')->get();
        $photos = Gallery::where('room_id', $request->room_id)->get();
        $map = Hotel::where('id', $request->hotel_id)->get();
        // dd($rooms);

        return view('Venue.room_details', compact('rooms','hotel_name', 'photos', 'hotel', 'map'));
    }

    public function roomFilter(Request $request)
    {
        //size
        if ($request->size == "500") {
            $minSize = 0;
            $maxSize = 500;
        } elseif ($request->size == "1000") {
            $minSize = 501;
            $maxSize = 1000;
        } elseif ($request->size == "1500") {
            $minSize = 2001;
            $maxSize = 1500;
        } elseif ($request->size == "2000") {
            $minSize = 1501;
            $maxSize = 2000;
        } elseif ($request->size == "2001") {
            $minSize = 2001;
            $maxSize = INF;
        } else {
            $minSize = 0;
            $maxSize = INF;
        }

        //single rate
        if ($request->single == "500") {
            $minSingle = 0;
            $maxSingle = 500;
        } elseif ($request->single == "1000") {
            $minSingle = 501;
            $maxSingle = 1000;
        } elseif ($request->single == "1500") {
            $minSingle = 2001;
            $maxSingle = 1500;
        } elseif ($request->single == "2000") {
            $minSingle = 1501;
            $maxSingle = 2000;
        } elseif ($request->single == "2001") {
            $minSingle = 2001;
            $maxSingle = INF;
        } else {
            $minSingle = 0;
            $maxSingle = INF;
        }

        //double rate
        if ($request->double == "500") {
            $minDouble = 0;
            $maxDouble = 500;
        } elseif ($request->double == "1000") {
            $minDouble = 501;
            $maxDouble = 1000;
        } elseif ($request->double == "1500") {
            $minDouble = 2001;
            $maxDouble = 1500;
        } elseif ($request->double == "2000") {
            $minDouble = 1501;
            $maxDouble = 2000;
        } elseif ($request->double == "2001") {
            $minDouble = 2001;
            $maxDouble = INF;
        } else {
            $minDouble = 0;
            $maxDouble = INF;
        }

        //corporate rate
        if ($request->corporate == "500") {
            $minCorporate = 0;
            $maxCorporate = 500;
        } elseif ($request->corporate == "1000") {
            $minCorporate = 501;
            $maxCorporate = 1000;
        } elseif ($request->corporate == "1500") {
            $minCorporate = 2001;
            $maxCorporate = 1500;
        } elseif ($request->corporate == "2000") {
            $minCorporate = 1501;
            $maxCorporate = 2000;
        } elseif ($request->corporate == "2001") {
            $minCorporate = 2001;
            $maxCorporate = INF;
        } else {
            $minCorporate = 0;
            $maxCorporate = INF;
        }

        $rooms = HotelRoom::where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('type_of_bed', $request->type_of_bed)
            ->where('single_rate', '>=', $minSingle)
            ->where('single_rate', '<=', $maxSingle)
            ->where('double_rate', '>=', $minDouble)
            ->where('double_rate', '<=', $maxDouble)
            ->where('corporate_rate', '>=', $minCorporate)
            ->where('corporate_rate', '<=', $maxCorporate)
            ->orderby('room_type', 'ASC')->get();

        // dd($rooms);

        $hotels = Hotel::get();
        // dd($rooms);
        $sizeselected= $request->size;
        $singlerateselected= $request->single;
        $doubleselected= $request->double;
        $corporateselected= $request->corporate;

        $bed_type = HotelRoom::distinct('type_of_bed')->get('type_of_bed');
        return view('Venue.hotel_filter', compact('hotels', 'bed_type', 'rooms','sizeselected','singlerateselected','doubleselected','corporateselected'));
    }

    public function eventspace()
    {
        $eventspace = EventSpace::orderby('venue', 'ASC')->get();
        $hotels = Hotel::paginate(9);
        return view('Venue.eventspace', compact('eventspace', 'hotels'));
    }

    public function eventspaceFilter(Request $request)
    {
        //size
        if ($request->size == "1000") {
            $minSize = 0;
            $maxSize = 1000;
        } elseif ($request->size == "5000") {
            $minSize = 1001;
            $maxSize = 5000;
        } elseif ($request->size == "10000") {
            $minSize = 5001;
            $maxSize = 10000;
        } elseif ($request->size == "15000") {
            $minSize = 10001;
            $maxSize = 15000;
        } elseif ($request->size == "20000") {
            $minSize = 15001;
            $maxSize = 20000;
        } elseif ($request->size == "20001") {
            $minSize = 20001;
            $maxSize = INF;
        } else {
            $minSize = 0;
            $maxSize = INF;
        }

        //Banquet
        if ($request->banquet == "500") {
            $minBanquet = 0;
            $maxBanquet = 500;
        } elseif ($request->banquet == "1000") {
            $minBanquet = 501;
            $maxBanquet = 1000;
        } elseif ($request->banquet == "1500") {
            $minBanquet = 2001;
            $maxBanquet = 1500;
        } elseif ($request->banquet == "2000") {
            $minBanquet = 1501;
            $maxBanquet = 2000;
        } elseif ($request->banquet == "2001") {
            $minBanquet = 2001;
            $maxBanquet = INF;
        } else {
            $minBanquet = 0;
            $maxBanquet = INF;
        }

        //Classroom
        if ($request->classroom == "500") {
            $minClassroom = 0;
            $maxClassroom = 500;
        } elseif ($request->classroom == "1000") {
            $minClassroom = 501;
            $maxClassroom = 1000;
        } elseif ($request->classroom == "1500") {
            $minClassroom = 2001;
            $maxClassroom = 1500;
        } elseif ($request->classroom == "2000") {
            $minClassroom = 1501;
            $maxClassroom = 2000;
        } elseif ($request->classroom == "2001") {
            $minClassroom = 2001;
            $maxClassroom = INF;
        } else {
            $minClassroom = 0;
            $maxClassroom = INF;
        }

        //Theater
        if ($request->theater == "500") {
            $minTheater = 0;
            $maxTheater = 500;
        } elseif ($request->theater == "1000") {
            $minTheater = 501;
            $maxTheater = 1000;
        } elseif ($request->theater == "1500") {
            $minTheater = 2001;
            $maxTheater = 1500;
        } elseif ($request->theater == "2000") {
            $minTheater = 1501;
            $maxTheater = 2000;
        } elseif ($request->theater == "2001") {
            $minTheater = 2001;
            $maxTheater = INF;
        } else {
            $minTheater = 0;
            $maxTheater = INF;
        }

        //Cocktail
        if ($request->cocktail == "500") {
            $minCocktail = 0;
            $maxCocktail = 500;
        } elseif ($request->cocktail == "1000") {
            $minCocktail = 501;
            $maxCocktail = 1000;
        } elseif ($request->cocktail == "1500") {
            $minCocktail = 2001;
            $maxCocktail = 1500;
        } elseif ($request->cocktail == "2000") {
            $minCocktail = 1501;
            $maxCocktail = 2000;
        } elseif ($request->cocktail == "2001") {
            $minCocktail = 2001;
            $maxCocktail = INF;
        } else {
            $minCocktail = 0;
            $maxCocktail = INF;
        }

        //Cabaret/Workshop
        if ($request->cabaret == "500") {
            $minCabaret = 0;
            $maxCabaret = 500;
        } elseif ($request->cabaret == "1000") {
            $minCabaret = 501;
            $maxCabaret = 1000;
        } elseif ($request->cabaret == "1500") {
            $minCabaret = 2001;
            $maxCabaret = 1500;
        } elseif ($request->cabaret == "2000") {
            $minCabaret = 1501;
            $maxCabaret = 2000;
        } elseif ($request->cabaret == "2001") {
            $minCabaret = 2001;
            $maxCabaret = INF;
        } else {
            $minCabaret = 0;
            $maxCabaret = INF;
        }

        //Booth capacity
        if ($request->booth_capacity == "500") {
            $minBooth_capacity = 0;
            $maxBooth_capacity = 500;
        } elseif ($request->booth_capacity == "1000") {
            $minBooth_capacity = 501;
            $maxBooth_capacity = 1000;
        } elseif ($request->booth_capacity == "1500") {
            $minBooth_capacity = 2001;
            $maxBooth_capacity = 1500;
        } elseif ($request->booth_capacity == "2000") {
            $minBooth_capacity = 1501;
            $maxBooth_capacity = 2000;
        } elseif ($request->booth_capacity == "2001") {
            $minBooth_capacity = 2001;
            $maxBooth_capacity = INF;
        } else {
            $minBooth_capacity = 0;
            $maxBooth_capacity = INF;
        }

        $eventspace = EventSpace::where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('banquet', '>=', $minBanquet)
            ->where('banquet', '<=', $maxBanquet)
            ->where('classroom', '>=', $minClassroom)
            ->where('classroom', '<=', $maxClassroom)
            ->where('theater', '>=', $minTheater)
            ->where('theater', '<=', $maxTheater)
            ->where('cocktail', '>=', $minCocktail)
            ->where('cocktail', '<=', $maxCocktail)
            ->where('cabaret', '>=', $minCabaret)
            ->where('cabaret', '<=', $maxCabaret)
            ->where('booth_capacity', '>=', $minBooth_capacity)
            ->where('booth_capacity', '<=', $maxBooth_capacity)
            ->orderby('venue', 'ASC')->get();


        // dd($eventspace);
        $hotels = Hotel::get();

        $size = $request->size;
        $banquet = $request->banquet;
        $classroom = $request->classroom;
        $theater = $request->theater;
        $cocktail = $request->cocktail;
        $cabaret = $request->cabaret;
        $booth_capacity = $request->booth_capacity;

        return view('Venue.eventspace_filter', compact('eventspace', 'hotels','size','banquet','classroom','theater','cocktail','cabaret','booth_capacity'));
    }

    public function eventspaceDetails(Request $request)
    {
        // dd($request->all());

        $hotels = EventSpace::where('hotel_id', $request->hotel_id)->get();
        $eventspace = EventSpace::where('id', $request->eventspace_id)->orderby('venue', 'ASC')->get();
        $photos = Gallery::where('eventspace_id', $request->eventspace_id)->get();
        $map = Hotel::where('id', $request->hotel_id)->get();
        $hotel_name =  Hotel::where('id', $request->hotel_id)->first();
        return view('Venue.eventspace_details', compact('hotel_name','eventspace', 'photos', 'hotels', 'map'));
    }



    public function comparisonHotel()
    {
        $rooms = HotelRoom::get();
        $hotels = Hotel::get();
        $bed_type = HotelRoom::distinct('type_of_bed')->get('type_of_bed');

        return view('Hotel.comparison', compact('rooms', 'hotels', 'bed_type'));
    }

    public function comparisonEventSpace()
    {
        $eventspace = EventSpace::get();
        $hotel = Hotel::get();

        return view('EventSpace.comparison', compact('eventspace', 'hotel'));
    }

    public function compareHotel(Request $request)
    {
        // dd($request->all());
        $room = HotelRoom::get();
        $hotel = Hotel::get();

        //size
        if ($request->size == "500") {
            $minSize = 0;
            $maxSize = 500;
        } elseif ($request->size == "1000") {
            $minSize = 501;
            $maxSize = 1000;
        } elseif ($request->size == "1500") {
            $minSize = 2001;
            $maxSize = 1500;
        } elseif ($request->size == "2000") {
            $minSize = 1501;
            $maxSize = 2000;
        } elseif ($request->size == "2001") {
            $minSize = 2001;
            $maxSize = INF;
        } else {
            $minSize = 0;
            $maxSize = INF;
        }

        //single rate
        if ($request->single == "500") {
            $minSingle = 0;
            $maxSingle = 500;
        } elseif ($request->single == "1000") {
            $minSingle = 501;
            $maxSingle = 1000;
        } elseif ($request->single == "1500") {
            $minSingle = 2001;
            $maxSingle = 1500;
        } elseif ($request->single == "2000") {
            $minSingle = 1501;
            $maxSingle = 2000;
        } elseif ($request->single == "2001") {
            $minSingle = 2001;
            $maxSingle = INF;
        } else {
            $minSingle = 0;
            $maxSingle = INF;
        }

        //double rate
        if ($request->double == "500") {
            $minDouble = 0;
            $maxDouble = 500;
        } elseif ($request->double == "1000") {
            $minDouble = 501;
            $maxDouble = 1000;
        } elseif ($request->double == "1500") {
            $minDouble = 2001;
            $maxDouble = 1500;
        } elseif ($request->double == "2000") {
            $minDouble = 1501;
            $maxDouble = 2000;
        } elseif ($request->double == "2001") {
            $minDouble = 2001;
            $maxDouble = INF;
        } else {
            $minDouble = 0;
            $maxDouble = INF;
        }

        //corporate rate
        if ($request->corporate == "500") {
            $minCorporate = 0;
            $maxCorporate = 500;
        } elseif ($request->corporate == "1000") {
            $minCorporate = 501;
            $maxCorporate = 1000;
        } elseif ($request->corporate == "1500") {
            $minCorporate = 2001;
            $maxCorporate = 1500;
        } elseif ($request->corporate == "2000") {
            $minCorporate = 1501;
            $maxCorporate = 2000;
        } elseif ($request->corporate == "2001") {
            $minCorporate = 2001;
            $maxCorporate = INF;
        } else {
            $minCorporate = 0;
            $maxCorporate = INF;
        }

        $room_1 = HotelRoom::where('hotel_id', $request->first_hotel)
            ->where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('type_of_bed', $request->type_of_bed)
            ->where('single_rate', '>=', $minSingle)
            ->where('single_rate', '<=', $maxSingle)
            ->where('double_rate', '>=', $minDouble)
            ->where('double_rate', '<=', $maxDouble)
            ->where('corporate_rate', '>=', $minCorporate)
            ->where('corporate_rate', '<=', $maxCorporate)
            ->orderby('room_type', 'ASC')->get();

        $room_2 = HotelRoom::where('hotel_id', $request->second_hotel)
            ->where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('type_of_bed', $request->type_of_bed)
            ->where('single_rate', '>=', $minSingle)
            ->where('single_rate', '<=', $maxSingle)
            ->where('double_rate', '>=', $minDouble)
            ->where('double_rate', '<=', $maxDouble)
            ->where('corporate_rate', '>=', $minCorporate)
            ->where('corporate_rate', '<=', $maxCorporate)
            ->orderby('room_type', 'ASC')->get();

        $room_3 = HotelRoom::where('hotel_id', $request->third_hotel)
            ->where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('type_of_bed', $request->type_of_bed)
            ->where('single_rate', '>=', $minSingle)
            ->where('single_rate', '<=', $maxSingle)
            ->where('double_rate', '>=', $minDouble)
            ->where('double_rate', '<=', $maxDouble)
            ->where('corporate_rate', '>=', $minCorporate)
            ->where('corporate_rate', '<=', $maxCorporate)
            ->orderby('room_type', 'ASC')->get();

        $hotel_1 = Hotel::where('id', $request->first_hotel)->first();
        $hotel_2 = Hotel::where('id', $request->second_hotel)->first();
        $hotel_3 = Hotel::where('id', $request->third_hotel)->first();
        // dd($hotel_1);
        $bed_type = HotelRoom::distinct('type_of_bed')->get('type_of_bed');

        // $hotel_1 = Hotel::findOrFail($request->first_hotel)->first();
        $sizeselected= $request->size;
        $singlerateselected= $request->single;
        $doubleselected= $request->double;
        $corporateselected= $request->corporate;
        $typebed = $request->type_of_bed;
        // dd($first_hotel);
        return view('Hotel.compared', compact('room','typebed', 'hotel', 'hotel_1', 'hotel_2', 'hotel_3', 'room_1', 'room_2', 'room_3', 'bed_type','hotel_1','corporateselected','doubleselected','sizeselected','singlerateselected'));
    }

    public function compareEventSpace(Request $request)
    {
        // dd($request->all());
        $eventspace = EventSpace::get();
        $hotel = Hotel::get();

        //size
        if ($request->size == "1000") {
            $minSize = 0;
            $maxSize = 1000;
        } elseif ($request->size == "5000") {
            $minSize = 1001;
            $maxSize = 5000;
        } elseif ($request->size == "10000") {
            $minSize = 5001;
            $maxSize = 10000;
        } elseif ($request->size == "15000") {
            $minSize = 10001;
            $maxSize = 15000;
        } elseif ($request->size == "20000") {
            $minSize = 15001;
            $maxSize = 20000;
        } elseif ($request->size == "20001") {
            $minSize = 20001;
            $maxSize = INF;
        } else {
            $minSize = 0;
            $maxSize = INF;
        }

        //Banquet
        if ($request->banquet == "500") {
            $minBanquet = 0;
            $maxBanquet = 500;
        } elseif ($request->banquet == "1000") {
            $minBanquet = 501;
            $maxBanquet = 1000;
        } elseif ($request->banquet == "1500") {
            $minBanquet = 2001;
            $maxBanquet = 1500;
        } elseif ($request->banquet == "2000") {
            $minBanquet = 1501;
            $maxBanquet = 2000;
        } elseif ($request->banquet == "2001") {
            $minBanquet = 2001;
            $maxBanquet = INF;
        } else {
            $minBanquet = 0;
            $maxBanquet = INF;
        }

        //Classroom
        if ($request->classroom == "500") {
            $minClassroom = 0;
            $maxClassroom = 500;
        } elseif ($request->classroom == "1000") {
            $minClassroom = 501;
            $maxClassroom = 1000;
        } elseif ($request->classroom == "1500") {
            $minClassroom = 2001;
            $maxClassroom = 1500;
        } elseif ($request->classroom == "2000") {
            $minClassroom = 1501;
            $maxClassroom = 2000;
        } elseif ($request->classroom == "2001") {
            $minClassroom = 2001;
            $maxClassroom = INF;
        } else {
            $minClassroom = 0;
            $maxClassroom = INF;
        }

        //Theater
        if ($request->theater == "500") {
            $minTheater = 0;
            $maxTheater = 500;
        } elseif ($request->theater == "1000") {
            $minTheater = 501;
            $maxTheater = 1000;
        } elseif ($request->theater == "1500") {
            $minTheater = 2001;
            $maxTheater = 1500;
        } elseif ($request->theater == "2000") {
            $minTheater = 1501;
            $maxTheater = 2000;
        } elseif ($request->theater == "2001") {
            $minTheater = 2001;
            $maxTheater = INF;
        } else {
            $minTheater = 0;
            $maxTheater = INF;
        }

        //Cocktail
        if ($request->cocktail == "500") {
            $minCocktail = 0;
            $maxCocktail = 500;
        } elseif ($request->cocktail == "1000") {
            $minCocktail = 501;
            $maxCocktail = 1000;
        } elseif ($request->cocktail == "1500") {
            $minCocktail = 2001;
            $maxCocktail = 1500;
        } elseif ($request->cocktail == "2000") {
            $minCocktail = 1501;
            $maxCocktail = 2000;
        } elseif ($request->cocktail == "2001") {
            $minCocktail = 2001;
            $maxCocktail = INF;
        } else {
            $minCocktail = 0;
            $maxCocktail = INF;
        }

        //Cabaret/Workshop
        if ($request->cabaret == "500") {
            $minCabaret = 0;
            $maxCabaret = 500;
        } elseif ($request->cabaret == "1000") {
            $minCabaret = 501;
            $maxCabaret = 1000;
        } elseif ($request->cabaret == "1500") {
            $minCabaret = 2001;
            $maxCabaret = 1500;
        } elseif ($request->cabaret == "2000") {
            $minCabaret = 1501;
            $maxCabaret = 2000;
        } elseif ($request->cabaret == "2001") {
            $minCabaret = 2001;
            $maxCabaret = INF;
        } else {
            $minCabaret = 0;
            $maxCabaret = INF;
        }

        //Booth capacity
        if ($request->booth_capacity == "500") {
            $minBooth_capacity = 0;
            $maxBooth_capacity = 500;
        } elseif ($request->booth_capacity == "1000") {
            $minBooth_capacity = 501;
            $maxBooth_capacity = 1000;
        } elseif ($request->booth_capacity == "1500") {
            $minBooth_capacity = 2001;
            $maxBooth_capacity = 1500;
        } elseif ($request->booth_capacity == "2000") {
            $minBooth_capacity = 1501;
            $maxBooth_capacity = 2000;
        } elseif ($request->booth_capacity == "2001") {
            $minBooth_capacity = 2001;
            $maxBooth_capacity = INF;
        } else {
            $minBooth_capacity = 0;
            $maxBooth_capacity = INF;
        }

        $room_1 = EventSpace::where('hotel_id', $request->first_hotel)
            ->where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('banquet', '>=', $minBanquet)
            ->where('banquet', '<=', $maxBanquet)
            ->where('classroom', '>=', $minClassroom)
            ->where('classroom', '<=', $maxClassroom)
            ->where('theater', '>=', $minTheater)
            ->where('theater', '<=', $maxTheater)
            ->where('cocktail', '>=', $minCocktail)
            ->where('cocktail', '<=', $maxCocktail)
            ->where('cabaret', '>=', $minCabaret)
            ->where('cabaret', '<=', $maxCabaret)
            ->where('booth_capacity', '>=', $minBooth_capacity)
            ->where('booth_capacity', '<=', $maxBooth_capacity)
            ->orderby('venue', 'ASC')->get();
        $room_2 = EventSpace::where('hotel_id', $request->second_hotel)
            ->where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('banquet', '>=', $minBanquet)
            ->where('banquet', '<=', $maxBanquet)
            ->where('classroom', '>=', $minClassroom)
            ->where('classroom', '<=', $maxClassroom)
            ->where('theater', '>=', $minTheater)
            ->where('theater', '<=', $maxTheater)
            ->where('cocktail', '>=', $minCocktail)
            ->where('cocktail', '<=', $maxCocktail)
            ->where('cabaret', '>=', $minCabaret)
            ->where('cabaret', '<=', $maxCabaret)
            ->where('booth_capacity', '>=', $minBooth_capacity)
            ->where('booth_capacity', '<=', $maxBooth_capacity)
            ->orderby('venue', 'ASC')->get();
        $room_3 = EventSpace::where('hotel_id', $request->third_hotel)
            ->where('size', '>=', $minSize)
            ->where('size', '<=', $maxSize)
            ->where('banquet', '>=', $minBanquet)
            ->where('banquet', '<=', $maxBanquet)
            ->where('classroom', '>=', $minClassroom)
            ->where('classroom', '<=', $maxClassroom)
            ->where('theater', '>=', $minTheater)
            ->where('theater', '<=', $maxTheater)
            ->where('cocktail', '>=', $minCocktail)
            ->where('cocktail', '<=', $maxCocktail)
            ->where('cabaret', '>=', $minCabaret)
            ->where('cabaret', '<=', $maxCabaret)
            ->where('booth_capacity', '>=', $minBooth_capacity)
            ->where('booth_capacity', '<=', $maxBooth_capacity)
            ->orderby('venue', 'ASC')->get();

        $size = $request->size;
        $banquet = $request->banquet;
        $classroom = $request->classroom;
        $theater = $request->theater;
        $cocktail = $request->cocktail;
        $cabaret = $request->cabaret;
        $booth_capacity = $request->booth_capacity;
        //  dd($room_3);
        $hotel_1 = Hotel::where('id', $request->first_hotel)->first();
        $hotel_2 = Hotel::where('id', $request->second_hotel)->first();
        $hotel_3 = Hotel::where('id', $request->third_hotel)->first();
        // dd($hotel_1);
        return view('EventSpace.compared', compact('eventspace', 'hotel', 'hotel_1', 'hotel_2', 'hotel_3', 'room_1', 'room_2', 'room_3','size','banquet',
        'classroom','theater','cocktail','cabaret','booth_capacity'));
    }


    public function contact()
    {
        return view('contact');
    }

    public function submitHotel(Request $request)
    {
        // dd($request->all());
        $uploaded_gambar = $request->file('thumbnail')->store('public/uploads');
        event($venue = $this->addHotel($request->all(), $uploaded_gambar));

        return redirect()->route('venue');
    }

    public function addHotel(array $data, $uploaded_gambar)
    {
        return Hotel::create([
            'hotel_name' => $data['hotel_name'],
            'car_radius' => $data['car_radius'],
            'walking_radius' => $data['walking_radius'],
            'room_type' => $data['room_type'],
            'single_rate' => $data['single_rate'],
            'double_rate' => $data['double_rate'],
            'corporate_rate' => $data['corporate_rate'],
            'thumbnail' => $uploaded_gambar,

        ]);
    }


    public function submitEventSpace(Request $request)
    {
        $uploaded_gambar = $request->file('thumbnail')->store('public/uploads');
        event($venue = $this->addEventSpace($request->all(), $uploaded_gambar));

        return redirect()->route('venue');
    }

    public function addEventSpace(array $data, $uploaded_gambar)
    {
        return EventSpace::create([
            'venue' => $data['venue'],
            'size' => $data['size'],
            'capacity' => $data['capacity'],
            'banquet' => $data['banquet'],
            'classroom' => $data['classroom'],
            'theater' => $data['theater'],
            'cocktail' => $data['cocktail'],
            'daily_rate' => $data['daily_rates'],
            'hotel_id' => $data['hotel_name'],
            'thumbnail' => $uploaded_gambar,

        ]);
    }

    public function details()
    {
        return view('venue.details');
    }
}
