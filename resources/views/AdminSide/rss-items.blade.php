@extends('Shared.components.layout')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold text-gray-500 mb-8">RSS Feed Items</h1>
    <!-- Container for cards, adopting the dark theme -->
    <div class="space-y-4">
        @foreach ($items as $item)
            <!-- Wrap the card in a link -->
            <a href="" class="block hover:no-underline">
                <div class="bg-gray-800 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                    <div class="md:flex">
                        <img class="object-cover w-full md:w-1/3 h-48" src="{{ $item->image }}" alt="Image">
                        <div class="p-4 flex flex-col justify-between leading-normal">
                            <h2 class="font-bold text-xl mb-2 text-white">{{ $item->title }}</h2>
                            <p class="text-gray-400 text-base mb-4">{{ $item->description }}</p>
                            <p class="text-gray-500 text-xs">Published on: {{ $item->pubDate }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
