<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithFileUploads;


class Hotels extends Component
{
    use WithFileUploads;
    public $hotel_name, $room_type,$car_radius,$walking_radius,$image,$longitude,$latitude,$lat,$lng;
    public $postSubmit, $hotel;

    protected $listeners = [
        'lat' => 'latStore',
        'lng' => 'lngStore'
    ];

    protected $rules = [
        'hotel_name' => 'required|string',
        'car_radius' => 'nullable|string',
        'walking_radius' => 'nullable|string',
        'image' => 'required|max:2048', // 2MB Max                   //validate
    ];

    public function render()
    {
        // dd(Hotel::get());
        return view('livewire.hotels');
    }

    public function updated()                   //function called everytime user input
    {
        $this->validate();
    }

    public function addHotel()

    {
        // dd($this);
        $this->validate();
        $image = $this->storeImage();
        // dd($this->latitude);
        $hotel = Hotel::create([
            'hotel_name'=> $this->hotel_name,
            'car_radius' => $this->car_radius,
            'walking_radius' => $this->walking_radius,
            'thumbnail' => $image,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,

        ]);
        $this->resetInputFields();

        $this->emit('room-process', $hotel->id);
        // return $hotel->id;
        session()->flash('message', 'Venue Has Been Added Successfully.');
    }

    public function storeImage()
    {
        $image = $this->image ?? null;
        if ($image) {
            $image = $image->store('public/upload');
        }
        // dd($image);
        return $image;
    }

    private function resetInputFields(){
        $this->hotel_name = '';
        $this->room_type = '';
        $this->car_radius = '';
        $this->walking_radius = '';
        $this->image = '';
        $this->longitude = '';
        $this->latitude = '';

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
