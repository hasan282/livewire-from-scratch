@php
    $listMenu = [
        [
            'text' => 'Greeting (Intro, Actions)',
            'href' => '/learn/greet',
        ],
        [
            'text' => 'Search Component',
            'href' => '/learn/search',
        ],
    ];
@endphp

@extends('learn.main')

@section('content')
    <ul class="text-gray-600 dark:text-white">
        @foreach ($listMenu as $lm)
            <li>
                <a href="{{ $lm['href'] }}" class="hover:text-blue-600 dark:hover:text-gray-400"
                    wire:navigate>{{ $lm['text'] }}</a>
            </li>
        @endforeach
    </ul>
@endsection
