<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EventSpace;
use Livewire\WithFileUploads;
use App\Models\Gallery;

class EditEvent extends Component
{
    use WithFileUploads;
    public $id_event;
    public $venue, $level, $size, $banquet, $classroom, $theater, $cocktail, $cabaret, $booth_capacity, $daily_rate, $photos, $caption;
    public $show = true;
    public $add = true;
    public $inputs = [];
    public $i = 0;
    public $updateMode = false;
    public EventSpace $event;
    // public $updateMode = true;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
        // array_push($this->photos ,$i);

    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
        // unset($this->photos[$i]);

    }

    public function render()
    {
        $eventspaces = EventSpace::get();
        return view('livewire.edit-event', compact('eventspaces'));
    }

    public function edit($id)
    {
        // dd($id);
        $room = EventSpace::findOrFail($id);
        $this->id_event = $room->id;
        $this->venue = $room->venue;
        $this->level = $room->level;
        $this->size = $room->size;
        $this->banquet = $room->banquet;
        $this->classroom = $room->classroom;
        $this->theater = $room->theater;
        $this->cocktail = $room->cocktail;
        $this->cabaret = $room->cabaret;
        $this->booth_capacity = $room->booth_capacity;
        $this->daily_rate = $room->daily_rate;
        $this->updateMode = true;
    }

    public function update()
    {
        $room = EventSpace::find($this->id_event);
        $room->update([
            'venue' => $this->venue,
            'level' => $this->level,
            'size' => $this->size,
            'banquet' => $this->banquet,
            'classroom' => $this->classroom,
            'theater' => $this->theater,
            'cocktail' => $this->cocktail,
            'cabaret' => $this->cabaret,
            'booth_capacity' => $this->booth_capacity,
            'daily_rate' => $this->daily_rate,
        ]);

        // dd($this->id_event);
        if ($this->photos) {
            $data = Gallery::where('eventspace_id', $this->id_event)->get();

            if ($data) {
                foreach ($data as $photo) {
                    $photo->delete();
                }
            }

            if ($this->photos) {
                foreach ($this->photos as $key => $value) {
                    Gallery::create([
                        'photos' => $this->photos[$key]->store('public/upload'),
                        'caption' => $this->caption[$key],
                        'eventspace_id' => $this->id_event,
                    ]);
                }
            }
        }

        $this->inputs = [];
        $this->resetInputFields();
        $this->updateMode = false;
    }

    private function resetInputFields()
    {
        $this->venue = null;
        $this->hotel_id = null;
        $this->level = null;
        $this->size = null;
        $this->banquet = null;
        $this->classroom = null;
        $this->theater = null;
        $this->cocktail = null;
        $this->cabaret = null;
        $this->booth_capacity = null;
        $this->daily_rate = null;
        $this->photos = null;
        $this->caption = null;
    }
}
