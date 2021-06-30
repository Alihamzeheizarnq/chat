<?php

    namespace App\Http\Livewire\Rooms;

    use App\Events\AddedRoom;
    use Illuminate\Support\Str;
    use Livewire\Component;

    class CreateRoom extends Component
    {
        public $name;

        protected $rules = [
            'name' => 'required|min:3|unique:rooms,name'
        ];

        public function create()
        {
            $this->validate();
            auth()->user()->rooms()->create([
                'name' => $this->name,
                'slug' => Str::slug($this->name)
            ]);
            broadcast(new AddedRoom())->toOthers();
            $this->name = '';
            $this->emit('refreshListRooms');
        }

        public function render()
        {
            return view('livewire.rooms.create-room');
        }
    }
