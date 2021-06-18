<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HotelRoom;
use Livewire\WithFileUploads;
use App\Models\Gallery;


class EditRoom extends Component
{
    use WithFileUploads;

    public $id_room;
    public $room_type, $size, $type_of_bed, $view, $single_rate, $double_rate, $corporate_rate,$photos,$caption;
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

    public function remove($i)
    {
        unset($this->inputs[$i]);
        // unset($this->photos[$i]);

    }

    public function render()
    {
        $rooms = HotelRoom::get();
        return view('livewire.edit-room',compact('rooms'));
    }

    public function edit($id){
        // dd($id);
        $room = HotelRoom::findOrFail($id);
        $this->id_room = $room->id;
        $this->room_type = $room->room_type;
        $this->size = $room->size;
        $this->type_of_bed = $room->type_of_bed;
        $this->view = $room->view;
        $this->single = $room->single;
        $this->updateMode = true;

    }

    public function update()
    {
            $room = HotelRoom::find($this->id_room);
            $room->update([
                'room_type' => $this->room_type,
                'size' => $this->size,
                'type_of_bed' => $this->type_of_bed,
                'view' => $this->view,
                'single_rate' => $this->single_rate,
                'double_rate' => $this->double_rate,
                'corporate_rate' => $this->corporate_rate,
            ]);

            // dd($this->id_room);
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
