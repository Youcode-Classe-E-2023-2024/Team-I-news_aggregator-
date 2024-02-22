<main class="flex bg-gray-900">
    <!-- component -->
    <div class="w-full h-full bg-gray-800 min-h-screen flex items-center justify-center">
        <div class="flex flex-col gap-8 items-center justify-center bg-green-500 rounded-md p-12">
            <h1 class="text-2xl font-bold">ADD AN RSS LINK INTO DATABASE</h1>
            <form
                action="{{ route('rss.store') }}" method="post"
                class="mx-auto min-w-[700px] relative bg-white min-w-sm max-w-2xl flex flex-col md:flex-row items-center justify-center border py-2 px-2 rounded-md gap-2 shadow-2xl focus-within:border-gray-300"
                for="search-bar">
                @csrf
                <input name="rssLink" id="search-bar" placeholder="Search By RSS link"
                       class="w-full px-6 py-2 w-full rounded-md flex-1 outline-none bg-white text-gray-700">
                <button
                    type="submit"
                    class="w-full md:w-auto px-6 py-3 bg-black border-black text-white fill-white active:scale-95 duration-100 border will-change-transform overflow-hidden relative rounded-xl transition-all disabled:opacity-70">

                    <div class="relative">

                        <!-- Loading animation change opacity to display -->
                        <div
                            class="flex items-center justify-center h-3 w-3 absolute inset-1/2 -translate-x-1/2 -translate-y-1/2 transition-all">
                            <svg class="opacity-0 animate-spin w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none"
                                 viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                      d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                        </div>

                        <div class="flex items-center transition-all opacity-1 valid:"><span
                                class="text-sm font-semibold whitespace-nowrap truncate mx-auto">
                    Search
                </span>
                        </div>

                    </div>

                </button>
            </form>

            <div class="w-full h-[350px]  border-white border-solid bg-gray-900 rounded-md">
                @if(null)
                    <a href="#" class="h-full w-full rounded-xl">

                    <!-- Badge -->
                    <p></p>
                    <div class="grid grid-cols-6 p-5 gap-y-2">

                        <!-- Profile Picture -->
                        <div>
                            <img src="https://picsum.photos/seed/2/200/200" class="max-w-16 max-h-16 rounded-full" />
                        </div>

                        <!-- Description -->
                        <div class="col-span-5 md:col-span-4 ml-4">

                            <p class="text-sky-500 font-bold text-xs"> 20+ SPOTS LEFT </p>

                            <p class="text-gray-600 font-bold"> [Intermediate/Advanced] Tea Time Conversation </p>

                            <p class="text-gray-400"> Sat, Mar 12 . 7:00 - 8:30 AM </p>

                            <p class="text-gray-400"> Beginner speakers </p>

                        </div>
                    </div>

                </a>
                @else
                    <div class="h-full w-full rounded-xl" style="background-image: url('http://127.0.0.1:8000/storage/images/illustration.png'); background-size: cover; background-position: center">

                    </div>
                @endif
            </div>
        </div>
    </div>
</main>

@if(isset($items))
    <main>
        <div class="container mx-auto py-8">
            <h1 class="text-3xl font-bold mb-4">RSS Feed Items</h1>
            <div class="space-y-4">
                @foreach ($items as $item)
                    <a href="{{ $item['link'] }}" class="block bg-white shadow-md hover:shadow-lg rounded-lg overflow-hidden">
                        <div class="p-4">
                            <h2 class="text-xl font-bold mb-2">{{ $item['title'] }}</h2>
                            <p class="text-gray-700">{{ $item['pubDate'] }}</p>
                            <p class="text-gray-600 mt-2">{{ $item['description'] }}</p>
                            <div>
{{--                                <a href="{{$item['link'] }}">link</a>--}}
                            </div>
                        </div>
                        @if ($item['image'])
                            <img src="{{ $item['image'] }}" class="w-full h-auto w-[100px]" alt="{{ $item['title'] }}">
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endif
