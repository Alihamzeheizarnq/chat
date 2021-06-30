<?php

namespace App\Http\Livewire\Rooms;

use App\Models\Room;
use Livewire\Component;

class SingleRoom extends Component
{
    public Room $room;
    public $messages = [];
    protected function getListeners()
    {
        return [
            'added.message' => '$refresh',
            "echo-private:added.message.{$this->room->id},AddedMessage" => '$refresh'
        ];
    }

    public function render()
    {
        $this->messages = $this->room->messages()->with('user')->get();
        return view('livewire.rooms.single-room');
    }
}
