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

    public $showgambar = true;
    public $addgambar = true;

    public $hotel_id, $room_type, $size, $type_of_bed, $view, $single_rate, $double_rate, $corporate_rate,$photos,$caption;
    public $updateMode = false;
    public $inputs = [];
    public $i = 0;
    public $j = 0;

    public function mount()
    {
        $this->hotel_id = 0;

    }

    public $inputphotos = [];

    protected $listeners = ['room-process' => 'store'];

    protected $rules = [

            'room_type.0' => 'required|string',
            'size.0' => 'required|numeric',
            'type_of_bed.0' => 'required|string',
            'view.0' => 'nullable|string',
            'single_rate.0' => 'nullable|numeric',
            'double_rate.0' => 'nullable|numeric',
            'corporate_rate.0' => 'nullable|numeric',
            // 'photos.0' => 'required|max:2048',

            'room_type.*' => 'required|string',
            'size.*' => 'required|numeric',
            'type_of_bed.*' => 'required|string',
            'view.*' => 'nullable|string',
            'single_rate.*' => 'nullable|numeric',
            'double_rate.*' => 'nullable|numeric',
            'corporate_rate.*' => 'nullable|numeric',
            // 'photos.*' => 'nullable|max:2048',


            //validate
    ];
    // public $employees, $name, $email, $employee_id;



    public function updated()                   //function called everytime user input
    {
        $this->validate();
    }

    public function addgambar($j)
    {
        $j = $j + 1;
        $this->j = $j;
        array_push($this->inputphotos,$j);

    }

    public function removegambar($j)
    {
        unset($this->inputphotos[$j]);

    }

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
        $this->room_type = null;
        $this->size = null;
        $this->type_of_bed = null;
        $this->view = null;
        $this->single_rate = null;
        $this->double_rate = null;
        $this->corporate_rate = null;
        $this->photos = null;

    }

    public function store()
    {
            // dd('masuk');
    //
        foreach ($this->room_type as $key => $value) {
            $this->validate();
            $hotel_room = HotelRoom::create ([
                'room_type' => $this->room_type[$key] ?? null,
                'size' => $this->size[$key] ?? null,
                'type_of_bed' => $this->type_of_bed[$key] ?? null,
                'view' => $this->view[$key] ?? null,
                'single_rate' => $this->single_rate[$key] ?? null,
                'double_rate' => $this->double_rate[$key] ?? null,
                'corporate_rate' => $this->corporate_rate[$key] ?? null,
                'hotel_id' =>$this->hotel_id,
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
        // dd($this->showgambar);
        $hotel_name = Hotel::distinct('hotel_name')->orderBy('hotel_name', 'ASC')->get();
        // $hotel_id = Hotel::distinct('id')->orderBy('hotel_name', 'ASC')->get();
        return view('livewire.room',compact ('hotel_name'));
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





