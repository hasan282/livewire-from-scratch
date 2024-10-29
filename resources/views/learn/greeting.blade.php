<div>
    <div class="mb-3">

        <form wire:submit="changeName()">

            <select id="setGreet" class="p-4 border rounded-md bg-gray-100 text-gray-600" wire:model.fill="greeting">
                <option value="Hello">Hello</option>
                <option value="Hi">Hi</option>
                <option value="Alola">Alola</option>
            </select>

            <input type="text" id="setName" class="p-4 border rounded-md bg-gray-100 text-gray-600"
                wire:model="name">
            <div class="text-red-600 text-sm">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <button type="submit"
                    class="mt-3 text-white text-sm rounded-md bg-blue-700 px-4 py-2 hover:bg-blue-600">
                    Change Name
                </button>
            </div>
        </form>

    </div>

    <div>
        @if (!empty($grMessage))
            <h3>{{ $grMessage }}!</h3>
        @endif
    </div>
</div>
