@include('Shared.components.header')

<body class="bg-gray-100 overflow-hidden h-screen w-screen">
    <div class="container mx-auto my-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Data Section -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Image -->
                <img src="{{ $newsItem->image }}" alt="{{ $newsItem->name }}" class="w-full object-cover h-64" />

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
                        <p class="text-gray-600 mt-2 leading-6">
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

            <!-- Comments Section -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <!-- Comment Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-6 p-6 bg-gray-200">
                    Commentaires
                </h2>

                <!-- List of Comments with overflow-y-auto -->
                <ul class="p-6 space-y-4 overflow-y-auto max-h-80">
                    @foreach($comments as $comment)
                        <li class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <div class="flex items-start space-x-4">
                                <!-- Remove the image -->
                                <div>
                                    <p class="text-gray-800 font-semibold text-md">{{ $comment->msgsender }}</p>
                                    <p class="text-gray-600 text-sm">{{ $comment->msg }}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <!-- Add Comment Input -->
                <div class="p-6">
                    <label for="comment" class="text-gray-800 font-medium">Add a Comment:</label>
                    <textarea id="comment" class="w-full h-16 px-3 py-2 mt-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 resize-none"></textarea>
                    <button onclick="sendmsg('{{ $newsItem->id }}')" class="w-full mt-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow hover:bg-blue-600 transition ease-in-out duration-150">
                        Add Comment
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- CSRF Meta Tag -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        function sendmsg(id){
            // Your JavaScript code (using Fetch API)

            const itemId = id;  // Replace with the actual item ID
            const msg = document.getElementById('comment').value;

            fetch('/comments/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: JSON.stringify({ item_id: itemId, msg: msg }),
            })
            .then(response => response.json())
            .then(data => {
                console.log('Comment saved:', data);
                // Handle the response as needed
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle errors
            });
        }
    </script>
</body>
