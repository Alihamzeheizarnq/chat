<div class="max-w-7xl mx-auto">
    <div class="bg-white shadow rounded-lg mt-10 p-4 space-y-4  flex flex-col" style="height: 700px;">
        <div class="border-b border-gray-200 pb-4">
            <h1 class="text-2xl font-bold">CHATROOM : {{ $room->name }}</h1>
        </div>
        <div class="flex h-full">
            <div class="w-3/12 h-full border-r border-gray-200 mr-4">
                <div class="pb-2">
                    <h3 class="text-xl font-bold">users</h3>
                </div>
                <ul>
                    <li>hesam</li>
                    <li>ali</li>
                </ul>
            </div>
            <div class="w-9/12 flex flex-col justify-between">
                @if($messages->count())
                    <div class="divide-y space-y-2 overflow-y-scroll" style="max-height: 500px;">
                        @foreach($messages as $message)
                            <div class="pt-2" style="
                            {{ $message->user_id == auth()->user()->id ? '
                            display: grid;
                           justify-content: center;
                           margin-left: 344px;
                           ' : '' }}>
                            " >

                                <div>
                                    <span class="font-bold border-r border-gray-200 pr-2 mr-1">{{ $message->user->name }}</span>
                                    <span class="text-gray-400">{{ \Carbon\Carbon::parse($message->created_at)->ago() }}</span>
                                </div>
                                <p style="color: {{ $message->user_id == auth()->user()->id ? 'green' : '' }}">
                                    {{ $message->body }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-gray-400">
                        Waiting For First Message
                    </div>
                @endif

       <livewire:rooms.new-message :room="$room" />

            </div>
        </div>
    </div>
</div>
