<div>

    <form class="mt-3">

        <input type="text" class="border rounded-md w-64" placeholder="Type Your Search Here.."
            wire:model.live.debounce="searchText">

        <button type="button" wire:click="clearSearch()"
            class="rounded-md text-white bg-blue-600 hover:bg-blue-800 px-3 py-2 text-sm disabled:bg-gray-400"
            {{ empty($searchText) ? 'disabled' : '' }}>
            <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current inline-block">
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg>
        </button>

    </form>

    <div class="mt-3 text-gray-800">

        @if ($searchText !== '' && sizeof($resultSearch) === 0)
            <p class="text-sm text-gray-500 ml-2">result not found...</p>
        @endif

        @foreach ($resultSearch as $rs)
            <div class="border border-gray-400 rounded-md px-4 py-3 mb-1">
                <h5 class="font-extrabold">{{ $rs['title'] }}</h5>
                <p class="text-sm">{{ $rs['content'] }}</p>
            </div>
        @endforeach

    </div>

</div>
