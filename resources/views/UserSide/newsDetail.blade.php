@include('Shared.components.header')

<body class="bg-gray-100">
    <div class="container mx-auto my-8 p-6 bg-white shadow-lg rounded-lg">
        <!-- Image -->
        <div class="w-full h-64 bg-cover bg-center rounded-t-lg" style="background-image: url('{{ $newsItem->image }}')"></div>
        
        <!-- Content -->
        <div class="p-6">
            <h3 class="text-2xl font-semibold text-gray-800 mb-2">
                {{ $newsItem->name }}
            </h3>
            <p class="text-gray-600">
                <span class="font-medium">Posted on:</span> {{ $newsItem->created_at->format('F d, Y') }}
            </p>
            <div class="mt-4 border-t border-gray-200 pt-4">
                <h4 class="text-lg font-medium text-gray-800">
                    Description
                </h4>
                <p class="text-gray-600 mt-2">
                    {{ $newsItem->description }}
                </p>
            </div>
            <!-- Additional details can go here -->
        </div>
    </div>
</body>
