<div class="grid grid-cols-6">
    <div class="col-start-1 col-span-6 md:col-span-4 relative">
        <x-form submit="update">
            <div>
                <x-jet-label for="title" value="Title" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full"
                    wire:model.defer="input.title" />
                <x-jet-input-error for="title" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="writer" value="Writer" />
                <x-jet-input id="writer" type="text" class="mt-1 block w-full"
                    wire:model.defer="input.writer" />
                <x-jet-input-error for="writer" class="mt-2" />
            </div>
            <div>
                <x-jet-label for="content" value="Content" />
                <textarea id="content"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full resize-none"
                    rows="4"
                    wire:model.defer="input.content"></textarea>
                <x-jet-input-error for="content" class="mt-2" />
            </div>
            <x-slot name="actions">
                <x-jet-button type="submit">Update</x-jet-button>
            </x-slot>
        </x-form>
        <div class="absolute bottom-0 mb-3 ml-4">
            <x-jet-danger-button type="button" wire:click="delete">Delete
            </x-jet-danger-button>
        </div>
    </div>
</div>
