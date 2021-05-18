<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\HotelRoom;
use App\Models\Hotel;
use App\Http\Livewire\Field;
use App\Models\Gallery;
use Illuminate\Http\Request;

class Room extends Component
{
    use WithFileUploads;

    public $show = true;
    public $add = true;

    protected $listeners = ['room-process' => 'store'];

    // public $employees, $name, $email, $employee_id;
    public $room_type, $size, $type_of_bed, $view, $single_rate, $double_rate, $corporate_rate;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;
    public $photos = [];

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->room_type = '';
        $this->size = '';
        $this->type_of_bed = '';
        $this->view = '';
        $this->single_rate = '';
        $this->double_rate = '';
        $this->corporate_rate = '';
        $this->photos = '';

    }


    // public $hotels, $hotel;
    // public function mount(){
    //   $this->hotels = Hotel::all();
    // }

    // public function getDtata($id){
    //   $hotel = Hotel::find($id);
    //   $this->hotel = $hotel;
    // }

    //bahagian isi data
    public function store(Hotel $hotel)
    {
        foreach ($this->room_type as $key => $value) {
            $hotel_room = HotelRoom::create ([
                'room_type' => $this->room_type[$key],
                'size' => $this->size[$key],
                'type_of_bed' => $this->type_of_bed[$key],
                'view' => $this->view[$key],
                'single_rate' => $this->single_rate[$key],
                'double_rate' => $this->double_rate[$key],
                'corporate_rate' => $this->corporate_rate[$key],
                'hotel_id' =>$hotel->id,
            ]);
            $image = $this->storeImage($hotel_room);


        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Room Has Been Added Successfully.');
    }


    public function render()
    {
        return view('livewire.room');
    }

    public function storeImage( $hotel_room)
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
                        'room_id' =>$hotel_room->id
                    ]);
                }
            }
        }
    }
}




