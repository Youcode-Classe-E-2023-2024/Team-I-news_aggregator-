@include('Shared.components.header')

<body style="background-image: url('http://127.0.0.1:8000/images/anime_letters.jpg'); background-size: cover; background-position: center" class=" ">

<x-Navbar :links="['Home' => '/home', 'Page 2' => '/page2']" />

<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example Category Card -->
        @foreach($categories as $category)
            <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $category->name }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $category->description }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <a href="{{ $category->link }}" class="inline-block bg-sky-950 rounded-full px-3 py-1 text-sm font-semibold text-white mr-2 mb-2">Explore</a>
                </div>
            </div>
        @endforeach
        <div class="mt-4 mx">
        {{ $categories->links() }}
    </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>

</body>
