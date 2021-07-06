<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HotelRoom;
use App\Models\Hotel;
use Livewire\WithFileUploads;
use App\Models\Gallery;


class EditRoom extends Component
{
    use WithFileUploads;

    public $id_room;
    public $room_type, $size, $type_of_bed, $view, $single_rate, $double_rate, $corporate_rate,$photos,$caption,$hotel_id;
    public $show = true;
    public $add = true;
    public $inputs = [];
    public $i = 0;
    public $updateMode = false;
    public HotelRoom $room;
    // public $updateMode = true;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
        // array_push($this->photos ,$i);

    }

    public function updated()                   //function called everytime user input
    {
        $this->validate();
    }

    protected $rules = [
        'room_type'=> 'required|string',
        'size'=> 'nullable|string',
        'type_of_bed'=> 'nullable|string',
        'view'=> 'nullable|string',
        'single_rate'=> 'nullable|numeric',
        'double_rate'=> 'nullable|numeric',
        'corporate_rate'=> 'nullable|numeric',
        'photos.0' =>  'nullable|image|max:10000',
        'photos.*' =>  'nullable|image|max:10000',                   //validate
    ];

    public function remove($i)
    {
        unset($this->inputs[$i]);
        // unset($this->photos[$i]);

    }

    public function render()
    {
        $rooms = HotelRoom::get();
        $hotel_name = Hotel::distinct('hotel_name')->orderBy('hotel_name', 'ASC')->get();

        return view('livewire.edit-room',compact('rooms','hotel_name'));
    }

    public function loadData(){
        $room = HotelRoom::findOrFail($this->id_room);
        $this -> hotel_id = $room -> hotel_id;
    }

    public function edit($id){
        // dd($id);
        $room = HotelRoom::findOrFail($id);
        $this->id_room = $room->id;
        $this->room_type = $room->room_type;
        $this->size = $room->size;
        $this->type_of_bed = $room->type_of_bed;
        $this->view = $room->view;
        $this->single_rate = $room->single_rate;
        $this->double_rate = $room->double_rate;
        $this->corporate_rate = $room->corporate_rate;
        $this->updateMode = true;

    }

    public function update()
    {
        $this->validate();
            $room = HotelRoom::find($this->id_room);
            $room->update([
                'room_type' => $this->room_type,
                'size' => $this->size,
                'type_of_bed' => $this->type_of_bed,
                'view' => $this->view,
                'single_rate' => $this->single_rate,
                'double_rate' => $this->double_rate,
                'corporate_rate' => $this->corporate_rate,
                //tambah hotel_id
            ]);

            // dd($this->id_room);
            if($this->photos){
            $data = Gallery::where('room_id', $this->id_room)->get();

            if($data){
                foreach($data as $photo){
                    $photo->delete();
                }
            }

            if($this->photos){
                foreach ($this->photos as $key => $value) {
                    Gallery::create ([
                        'photos' => $this->photos[$key]->store('public/upload'),
                        'caption' => $this->caption[$key],
                        'room_id' =>$this->id_room,
                    ]);
                }
            }


        }

            $this->inputs = [];
            $this->resetInputFields();
            $this->updateMode = false;
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
        $this->caption = null;

    }
}
