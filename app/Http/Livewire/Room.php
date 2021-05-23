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
    public $i = 0;
    public $photos = [];

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
        array_push($this->photos ,$i);

    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
        unset($this->photos[$i]);

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

    public function store(Hotel $hotel)
    {

    //     $this->validate([
    //         'room_type.0' => 'required|string',
    //         'size.0' => 'required|numeric',
    //         'type_of_bed.0' => 'required|string',
    //         'view.0' => 'nullable|string',
    //         'single_rate.0' => 'nullable|numeric',
    //         'double_rate.0' => 'nullable|numeric',
    //         'corporate_rate.0' => 'nullable|numeric',
    //         'photos.0' => 'required|max:2048',

    //         'room_type.*' => 'required|string',
    //         'size.*' => 'required|numeric',
    //         'type_of_bed.*' => 'required|string',
    //         'view.*' => 'nullable|string',
    //         'single_rate.*' => 'nullable|numeric',
    //         'double_rate.*' => 'nullable|numeric',
    //         'corporate_rate.*' => 'nullable|numeric',
    //         'photos.*' => 'required|max:2048',
    //     ],
    //     [
    //         'room_type.0.required' => 'This field is required',
    //         'size.0.required' => 'This field is required',
    //         'type_of_bed.0.required' => 'This field is required',
    //         'photos.0.required' => 'This field is required',

    //         'size.0.numeric' => 'Please insert numeric value',



    //         'single_rate.0.numeric' => 'Please insert numeric value',
    //         'double_rate.0.numeric' => 'Please insert numeric value',
    //         'corporate_rate.0.numeric' => 'Please insert numeric value',

    //         'room_type.*.required' => 'This field is required',
    //         'size.*.required' => 'This field is required',
    //         'type_of_bed.*.required' => 'This field is required',
    //         'photos.*.required' => 'This field is required',


    //         'size.*.numeric' => 'Please insert numeric value',



    //         'single_rate.*.numeric' => 'Please insert numeric value',
    //         'double_rate.*.numeric' => 'Please insert numeric value',
    //         'corporate_rate.*.numeric' => 'Please insert numeric value',
    //     ]

    // );

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
            // dd($hotel_room->id);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Room Has Been Added Successfully.');
    }


    public function render()
    {
        return view('livewire.room');
    }

    public function storeImage($hotel_room)
    {
        $photos = $this->photos ?? null;
        // dd($this->photos);
        if ($photos) {
            foreach ($photos as $photo) {
                foreach ($photo as $data) {
                    $images = $data->store('public/upload');
                    Gallery::create ([
                        'photos' => $images,
                        'room_id' => $hotel_room->id
                    ]);
                }
            }
        }
    }
}





