@include('Shared.components.header')

<body class="bg-gray-100">
    <div class="container mx-auto my-8">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <!-- Image -->
            <img src="{{ $newsItem->image }}" alt="{{ $newsItem->name }}" class="w-full object-contain h-64" />

            <!-- Content -->
            <div class="p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                    {{ $newsItem->name }}
                </h3>
                <p class="text-gray-600">
                    <span class="font-medium">Posted on:</span> {{ $newsItem->created_at->format('F d, Y') }}
                </p>
                <div class="mt-4">
                    <h4 class="text-lg font-medium text-gray-800">
                        Description
                    </h4>
                    <p class="text-gray-600 mt-2 whitespace-pre-line">
                        {{ $newsItem->description }}
                    </p>
                </div>
                <!-- Additional details can go here -->
            </div>

            <!-- Back Button -->
            <div class="px-6 py-4">
                <a href="{{ url('http://127.0.0.1:8000/home') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
    </div>
</body>
