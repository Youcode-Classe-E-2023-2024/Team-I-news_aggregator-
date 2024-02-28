@include('Shared.components.header')

<body>

    <x-Navbar :links="[
        'Home' => '/home',
        'Trend' => '/Trend',
        'Favorites' => '/Favorites',
        'Categories' => '/categories',
        'Profile' => '/Profile',
        'Details' => '/Details',
    ]" />


    <div class="container mx-auto px-4 mt-40">
        @php $i = 0; @endphp
        @foreach($categories as $category)
        @if($i % 3 == 0)
        <div class="flex justify-between mt-6">
            @endif
            <div class="relative max-w-xl mx-auto w-[400px]">
                <img class="h-64 w-full object-cover rounded-md" src="https://source.unsplash.com/1000x1000/?{{ $category->name }}" alt="Random image">
                <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <h2 class="text-white text-3xl font-bold">{{ $category->name }}</h2>
                </div>
            </div>
            @php $i++; @endphp
            @if($i % 3 == 0)
        </div>
        @endif
        @endforeach
        @if($i % 3 != 0)
    </div> <!-- Close the last row if not already closed -->
    @endif
    </div>








</body>