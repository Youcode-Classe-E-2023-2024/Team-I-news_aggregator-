@extends('Shared.components.layout')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-8">RSS Feed Items</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Example Card -->
        @for ($i = 0; $i < 8; $i++)
            <div class="bg-white rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <img class="w-full h-48 object-cover" src="https://picsum.photos/400/300" alt="News Image">
                <div class="p-4">
                    <h2 class="font-bold text-xl mb-2">News Title Here</h2>
                    <p class="text-gray-700 text-base mb-4">
                        This is a short description of the news item. It provides a brief overview of the content.
                    </p>
                    <p class="text-gray-600 text-xs">Published on: 2024-02-23</p>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection