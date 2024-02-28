@include('Shared.components.header')
<style>
    .containerbg {
  width: 100%;
  height: 100%;
  --sz: 4px; /*** size ***/
  --sp: 5s; /*** speed ***/
  --b1: #211e1e; /*** color ***/
  --b2: #1c1b18; /*** color ***/
  --b3: #0c0b0a; /*** color ***/
  --b4: #0c0b0ae0; /*** color ***/
  --c1: #ffffff; /*** color ***/
  --ts: 50% / calc(var(--sz) * 17.5) calc(var(--sz) * 29.5);
  background:
		/* black shadows */ radial-gradient(
        circle at 50% 50%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 0% 0%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 0% 100%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 100% 0%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    radial-gradient(
        circle at 100% 100%,
        var(--b4) calc(var(--sz) * 1),
        #fff0 calc(var(--sz) * 8)
      )
      var(--ts),
    /* border bottom */
      conic-gradient(
        from 90deg at 97.5% 67%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 90deg at 97.5% 67%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    conic-gradient(
        from 182.5deg at 2.5% 67%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 182.5deg at 2.5% 67%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /* border top */
      conic-gradient(
        from 270deg at 2.5% 33%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 270deg at 2.5% 33%,
        var(--c1) 0 87.5deg,
        #fff0 88deg 100%
      )
      var(--ts),
    conic-gradient(
        from 2.5deg at 97.5% 33%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 2.5deg at 97.5% 33%,
        #fff0 0 0deg,
        var(--c1) 0.5deg 90deg,
        #fff0 0 100%
      )
      var(--ts),
    /* bottom */
      conic-gradient(
        from 116.5deg at 50% 85.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 116.5deg at 50% 85.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from 116.5deg at 50% 85.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    conic-gradient(from 120deg at 50% 83%, var(--c1) 0 120deg, #fff0 0 100%)
      var(--ts),
    /* top */
      conic-gradient(
        from -63.5deg at 50% 14.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from -63.5deg at 50% 14.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    /*repeated*/
      conic-gradient(
        from -63.5deg at 50% 14.5%,
        var(--b1) 0 127deg,
        #fff0 0 100%
      )
      var(--ts),
    conic-gradient(from -60deg at 50% 17%, var(--c1) 0 120deg, #fff0 0 100%)
      var(--ts),
    /* central gradient */
      conic-gradient(
        from 0deg at 50% 50%,
        #fff0 0 2deg,
        var(--b2) 2.5deg 57.5deg,
        #fff0 58deg 62.5deg,
        var(--b1) 63deg 117.5deg,
        #fff0 118deg 122.5deg,
        var(--b3) 123deg 177.5deg,
        #fff0 178deg 182deg,
        var(--b2) 182.5deg 237.5deg,
        #fff0 0 242.5deg,
        var(--b1) 243deg 297.5deg,
        #fff0 298deg 302.5deg,
        var(--b3) 303deg 357.5deg,
        #fff0 358deg 360deg
      )
      var(--ts),
    /* bg */ var(--c1);
  animation: colors var(--sp) linear 0s infinite;
}

@keyframes colors {
  100% {
    filter: hue-rotate(360deg);
  }
}

</style>
<body class=" bg-gray-100 overflow-hidden h-screen w-screen">
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
                <ul id="commentsList" class="p-6 space-y-4 overflow-y-auto max-h-80">
                    @foreach($comments as $comment)
                        <li class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <div class="flex items-start space-x-4">
                                <!-- Add sender's photo -->
                                <img src="https://media.istockphoto.com/id/682897825/fr/photo/confident-businesswoman-over-gray-background.jpg?s=2048x2048&w=is&k=20&c=Vekuca6Dk-CVIO3Wk4fi1tCak0uX6gZdXxoiWWzimp4=" class="w-8 h-8 rounded-full">

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
    function sendmsg(id) {
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

            // Append the new message to the comments section
            const commentsList = document.getElementById('commentsList');
            const newComment = document.createElement('li');
            newComment.className = 'bg-gray-100 p-4 rounded-lg shadow-md';

            const senderPhoto = document.createElement('img');
            senderPhoto.src = data.sender_photo;  // Replace with the actual sender's photo URL
            senderPhoto.alt = data.msgsender;
            senderPhoto.className = 'w-8 h-8 rounded-full';

            const commentContent = document.createElement('div');
            commentContent.className = 'flex items-start space-x-4';
            
            const senderInfo = document.createElement('div');
            const senderName = document.createElement('p');
            senderName.className = 'text-gray-800 font-semibold text-md';
            senderName.textContent = data.msgsender;

            const messageText = document.createElement('p');
            messageText.className = 'text-gray-600 text-sm';
            messageText.textContent = data.msg;

            senderInfo.appendChild(senderName);
            senderInfo.appendChild(messageText);
            
            commentContent.appendChild(senderPhoto);
            commentContent.appendChild(senderInfo);

            newComment.appendChild(commentContent);
            commentsList.appendChild(newComment);

            // Clear the textarea after sending the message
            document.getElementById('comment').value = '';
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors
        });
    }
</script>
</body>
