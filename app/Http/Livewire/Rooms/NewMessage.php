<?php

namespace App\Http\Livewire\Rooms;

use App\Events\AddedMessage;
use Livewire\Component;

class NewMessage extends Component
{
    public $message;
    public $room;

    protected $rules = ['message' => 'required'];

    public function typing()
    {
        
    }
    public function create()
    {
        $this->validate();
        $this->room->messages()->create([
           'body' => $this->message,
           'user_id' => auth()->user()->id
        ]);
        broadcast(new AddedMessage($this->room->id))->toOthers();
        $this->emit('added.message');
        $this->message = '';
    }
    public function render()
    {
        return view('livewire.rooms.new-message');
    }
}
