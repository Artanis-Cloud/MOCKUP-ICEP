<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\EventSpace;
use App\Models\Gallery;
use Livewire\WithFileUploads;

class Event extends Component
{
    use WithFileUploads;
    public $hotel_id,$venue, $level,$size,$banquet,$classroom,$theater,$cocktail,$cabaret,$booth_capacity,$daily_rate,$image,$longitude,$latitude,$car_radius,$walking_radius;
    public $show;
    public $photos = [];
    protected $listeners = [
        'showFormHotel',
        'showFormNotHotel',
        'lat' => 'latStore',
        'lng' => 'lngStore'
    ];

    public function mount()
    {
        $this->hotel_id = 0;
        $this->show = 0;

    }

    public function render()
    {
        $hotel_name = Hotel::distinct('hotel_name')->get();
        $hotel_id = Hotel::distinct('id')->get();

        return view('livewire.event',compact('hotel_name'));
    }



    protected $rules = [
        'venue' => 'required|string',
        'level' => 'nullable|numeric',
        'size' => 'required|numeric',
        'banquet' => 'nullable|numeric',
        'classroom' => 'nullable|numeric',
        'theater' => 'nullable|numeric',
        'cabaret' => 'nullable|numeric',
        'cocktail' => 'nullable|numeric',
        'booth_capacity' => 'nullable|numeric',
        'daily_rate' => 'nullable|numeric',
        'car_radius' => 'nullable|numeric',
        'walking_radius' => 'nullable|numeric',
        'image' => 'required|max:2048',
        'photos' => 'required|max:2048',
    ];

    public function updated()                   //function called everytime user input
    {
        $this->validate();
    }

    // public function addEvent()

    // {
    //     // dd($this->hotel_id);
    //     // $this->validate();
    //     // $image = $this->storeImage();

    //     $this->validate();
    //     $event_space =EventSpace::create([
    //         'venue'=> $this->venue,
    //         'level' => $this->level,
    //         'size' => $this->size,
    //         'banquet' => $this->banquet,
    //         'classroom' => $this->classroom,
    //         'theater' => $this->theater,
    //         'cocktail' => $this->cocktail,
    //         'cabaret' => $this->cabaret,
    //         'hotel_id'=> $this->hotel_id,
    //         'booth_capacity' => $this->booth_capacity,
    //         'daily_rate' => $this->daily_rate,



    //     ]);

    //     $photos = $this->storePhoto($event_space);
    //     $this->resetInputFields();

    //     session()->flash('message', 'Venue Has Been Added Successfully.');
    // }

    public function addEventOnly()

    {
        // dd($this->photos);
        $this->validate();
        $image = $this->storeImage();

        if($this->hotel_id){
            $event_space =EventSpace::create([
                'venue'=> $this->venue,
                'level' => $this->level,
                'size' => $this->size,
                'banquet' => $this->banquet,
                'classroom' => $this->classroom,
                'theater' => $this->theater,
                'cocktail' => $this->cocktail,
                'cabaret' => $this->cabaret,
                'booth_capacity' => $this->booth_capacity,
                'daily_rate' => $this->daily_rate,
                'thumbnail' => $image,
                'hotel_id'=> $this->hotel_id,
                'car_radius' => $this->car_radius,
                'walking_radius' => $this->walking_radius,
                'longitude' => $this->longitude,
                'latitude' => $this->latitude,
            ]);
        }
        else{
            $event_space =EventSpace::create([
                'venue'=> $this->venue,
                'level' => $this->level,
                'size' => $this->size,
                'banquet' => $this->banquet,
                'classroom' => $this->classroom,
                'theater' => $this->theater,
                'cocktail' => $this->cocktail,
                'cabaret' => $this->cabaret,
                'booth_capacity' => $this->booth_capacity,
                'daily_rate' => $this->daily_rate,
                'thumbnail' => $image,
                'car_radius' => $this->car_radius,
                'walking_radius' => $this->walking_radius,
                'longitude' => $this->longitude,
                'latitude' => $this->latitude,
            ]);
        }


        $photos = $this->storePhoto($event_space);

        $this->resetInputFields();
        session()->flash('message', 'Venue Has Been Added Successfully.');
    }

    public function storeImage()
    {
        $image = $this->image ?? null;
        // dd($image);
        if ($image) {
            $image = $image->store('public/upload');
        }
        // dd($image);
        return $image;
    }

    public function storePhoto($event_space)
    {

        $photos = $this->photos ?? null;
        // dd($this->photos);
        if ($photos) {
            foreach ($photos as $photo) {
                foreach ($photo as $data) {
                    // dd($data);
                    $image=$data->store('public/upload');
                    $test = Gallery::create ([
                        'photos' => $image,
                        'eventspace_id' =>$event_space->id
                    ]);
                    // dd($test);
                }
            }
        }
    }

    private function resetInputFields(){
        $this->venue = '';
        $this->hotel_id = '';
        $this->level = '';
        $this->size = '';
        $this->banquet = '';
        $this->classroom = '';
        $this->theater = '';
        $this->cocktail = '';
        $this->cabaret = '';
        $this->booth_capacity = '';
        $this->daily_rate = '';
        $this->image = '';
        $this->photos = '';
        $this->latitude = '';
        $this->longitude = '';
    }

    public function showFormHotel()
    {
        // dd($this->show);
        $this->show = 1;
    }

    public function showFormNotHotel()
    {
        $this->show = 2;
        // dd($this->show);
    }

    public function latStore($lat)
    {
        $this->latitude = $lat;
    }

    public function lngStore($lng)
    {
        $this->longitude = $lng;
    }

}
