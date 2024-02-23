@extends('Shared.components.layout')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">RSS Feed Items</h1>
        <div class="space-y-4">
            @foreach ($items as $item)
                <a href="{{ $item['link'] }}" class="block bg-white shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2">{{ $item['title'] }}</h2>
                        <p class="text-gray-700">{{ $item['pubDate'] }}</p>
                        <p class="text-gray-600 mt-2">{{ $item['description'] }}</p>
                    </div>
                    @if ($item['image'])
                        <img src="{{ $item['image'] }}" class="w-full h-auto" alt="{{ $item['title'] }}">
                    @endif
                </a>
            @endforeach
        </div>
    </div>
@endsection
