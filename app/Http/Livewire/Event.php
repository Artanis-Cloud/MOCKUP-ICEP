<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Hotel;
use App\Models\EventSpace;
use Livewire\WithFileUploads;

class Event extends Component
{
    use WithFileUploads;
    public $hotel_id,$venue, $level,$size,$banquet,$classroom,$theater,$cocktail,$cabaret,$booth_capacity,$daily_rate,$image;


    public function render()
    {
        $hotel_name = Hotel::distinct('hotel_name')->get();
        $hotel_id = Hotel::distinct('id')->get();

        return view('livewire.event',compact('hotel_name'));
    }

    // public function updated()                   //function called everytime user input
    // {
    //     $this->validate();
    // }

    public function addEvent()

    {
        // dd($this->hotel_id);
        // $this->validate();
        // $image = $this->storeImage();

        $hotel = EventSpace::create([
            'venue'=> $this->venue,
            'level' => $this->level,
            'size' => $this->size,
            'banquet' => $this->banquet,
            'classroom' => $this->classroom,
            'theater' => $this->theater,
            'cocktail' => $this->cocktail,
            'cabaret' => $this->cabaret,
            'hotel_id'=> $this->hotel_id,
            'booth_capacity' => $this->booth_capacity,
            'daily_rate' => $this->daily_rate,
            // 'thumbnail' => $image,

        ]);
        $this->resetInputFields();

        session()->flash('message', 'Venue Has Been Added Successfully.');
    }

    // public function storeImage()
    // {
    //     // $image = $this->image ?? null;
    //     // if ($image) {
    //     //     $image = $image->store('public/upload');
    //     // }
    //     // dd($image);
    //     // return $image;
    // }

    private function resetInputFields(){
        $this->venue = '';
        $this->level = '';
        $this->size = '';
        $this->banquet = '';
        $this->classroom = '';
        $this->theater = '';
        $this->cocktail = '';
        $this->cabaret = '';
        $this->booth_capacity = '';
        $this->daily_rate = '';
        // $this->image = '';
    }


}
