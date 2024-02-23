@extends('Shared.components.layout')

@section('content')
<div class="container mx-auto p-8">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <div class="mb-4">
            <img class="w-full h-64 object-cover rounded" src="{{ $item->image }}" alt="{{ $item->title }}">
        </div>
        <h1 class="text-3xl font-bold mb-2 text-white">{{ $item->title }}</h1>
        <p class="text-gray-400 mb-4">{{ $item->description }}</p>
        <p class="text-gray-500 text-xs">Published on: {{ $item->pubDate }}</p>
        <!-- Add any additional details you want to include about the RSS feed item -->
    </div>
</div>
@endsection