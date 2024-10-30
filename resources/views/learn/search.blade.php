@extends('learn.main')

@section('content')
    <div class="text-gray-800 dark:text-white mb-4">
        <a class="hover:text-blue-600 dark:hover:text-gray-500" href="{{ route('learn') }}" wire:navigate>

            <svg viewBox="0 0 20 20" class="w-5 h-5 fill-current inline-block">
                <path xmlns="http://www.w3.org/2000/svg"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
            </svg>

            <span class="ml-1">Back to List</span>
        </a>
    </div>
    <hr class="border-gray-200 dark:border-gray-700">
    <livewire:learn.search />
@endsection
