<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\WithFileUploads;


class Hotels extends Component
{
    use WithFileUploads;
    public $hotel_name, $room_type,$car_radius,$walking_radius,$image,$longitude,$latitude;

    protected $rules = [
        'hotel_name' => 'required|string|max:10',
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
        $this->validate();

        $image = $this->storeImage();
        Hotel::create([
            'hotel_name'=> $this->hotel_name,
            'room_type' => $this->room_type,
            'car_radius' => $this->car_radius,
            'walking_radius' => $this->walking_radius,
            'thumbnail' => $image,
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,

        ]);


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

}
