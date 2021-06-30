<form wire:submit.prevent="create">
    Create Your Chat Room :
    <input type="text" wire:model="name" placeholder="chat room name" class="rounded-md p-2 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
    <button type="submit" class="inline-flex items-center p-3 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Create</button>
    @error('name') <span>{{ $message }}</span> @enderror

</form>
