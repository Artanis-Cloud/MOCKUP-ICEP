<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\HotelRoom;
use App\Models\Hotel;
use App\Http\Livewire\Field;
use Illuminate\Http\Request;

class Room extends Component
{
    public $show = true;
    public $add = true;

    protected $listeners = ['room-process' => 'store'];

    // public $employees, $name, $email, $employee_id;
    public $room_type, $size, $type_of_bed,$view,$single_rate,$double_rate,$corporate_rate,$benefits;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

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
        $this->benefits = '';

    }

    // public $hotels, $hotel;
    // public function mount(){
    //   $this->hotels = Hotel::all();
    // }

    // public function getDtata($id){
    //   $hotel = Hotel::find($id);
    //   $this->hotel = $hotel;
    // }

    public function store(Hotel $hotel)             //bahagian isi data
    {
        // dd($this->hotel);
        // $validatedDate = $this->validate([
        //         'name.0' => 'required',
        //         'email.0' => 'required',
        //         'name.*' => 'required',
        //         'email.*' => 'required|email',
        //         'name.0' => 'required',
        //         'email.0' => 'required',
        //         'name.*' => 'required',
        //         'email.*' => 'required|email',
        //     ],
        //     [
        //         'name.0.required' => 'name field is required',
        //         'email.0.required' => 'email field is required',
        //         'email.0.email' => 'The email must be a valid email address.',
        //         'name.*.required' => 'name field is required',
        //         'email.*.required' => 'email field is required',
        //         'email.*.email' => 'The email must be a valid email address.',
        //     ]
        // );
            // dd($hotel->id);
        foreach ($this->room_type as $key => $value) {
            $test = HotelRoom::create (['room_type' => $this->room_type[$key], 'size' => $this->size[$key], 'type_of_bed' => $this->type_of_bed[$key],'view' => $this->view[$key],
                'single_rate' => $this->single_rate[$key],'double_rate' => $this->double_rate[$key],'corporate_rate' => $this->corporate_rate[$key],'benefits' => $this->benefits[$key],
                'hotel_id' =>$hotel->id,
            ]);
            // dd($test);
        }

        $this->inputs = [];

        $this->resetInputFields();

        session()->flash('message', 'Room Has Been Added Successfully.');
    }

    public function render()
    {
        return view('livewire.room');
    }
}


