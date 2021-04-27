<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;

class Hotels extends Component
{
    public $hotel_name, $car_radius, $walking_radius, $room_type,$single_rate, $double_rate, $corporate_rate, $thumbnail;
    public $inputs = [];
    public $i = 1;

    public function render()
    {
        // dd(Hotel::get());
        $hotels = Hotel::get();
        return view('livewire.hotels', compact('hotels'));
    }

    public function add($i)

    {
        dd('test');
        $i = $i + 1;

        $this->i = $i;

        array_push($this->inputs ,$i);

    }
}
