@extends('learn.main')

@section('content')
    <div>
        <a href="{{ route('learn') }}" wire:navigate>back to list</a>
    </div>
    <livewire:learn.greeting />
@endsection
