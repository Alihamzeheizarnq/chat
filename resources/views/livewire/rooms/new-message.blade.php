<form wire:submit.prevent="create" class="flex items-start space-x-3">
    <textarea wire:model.lazy="message" wire:keydown="typing" class="rounded-md p-2 shadow-sm border-gray-300 w-full" placeholder="Your Message" name="message" rows="2" widht="100%"></textarea>
    <button class="bg-blue-500 text-white rounded p-2 px-4">send</button>
</form>
