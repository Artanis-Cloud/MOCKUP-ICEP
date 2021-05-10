<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithFileUploads;


class Hotels extends Component
{
    use WithFileUploads;
    public $hotel_name, $room_type,$car_radius,$walking_radius,$image,$longitude,$latitude;
    public $postSubmit, $hotel;

    protected $rules = [
        'hotel_name' => 'required|string',
        'image' => 'max:2048', // 2MB Max                   //validate
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
        // dd('here');
        $this->validate();
        $image = $this->storeImage();

        $hotel = Hotel::create([
            'hotel_name'=> $this->hotel_name,
            'room_type' => $this->room_type,
            'car_radius' => $this->car_radius,
            'walking_radius' => $this->walking_radius,
            'thumbnail' => $image,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,

        ]);
        $this->resetInputFields();

        $this->emit('room-process', $hotel->id);
        // return $hotel->id;
        session()->flash('message', 'Room Has Been Added Successfully.');
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

}
