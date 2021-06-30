<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'refreshListRooms' => '$refresh',
        'echo-private:added-room,AddedRoom' => '$refresh'
    ];
    public function render()
    {
        $rooms = Room::latest()->paginate(20);
        return view('livewire.rooms.index' , compact('rooms'));
    }
}
