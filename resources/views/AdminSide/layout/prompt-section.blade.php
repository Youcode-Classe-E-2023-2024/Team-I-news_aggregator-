<main class="flex bg-gray-900">
    <!-- component -->
    <div class="w-full flex flex-col gap-8 items-center justify-center min-h-screen bg-gray-800">

        <h1 class="text-2xl">Add RSS links to DataBase</h1>
        <!-- Search component  -->
        <form action="{{ route('rss.store') }}" method="post" class="flex border border-white border-solid  rounded-full bg-[#0d1829] px-2 w-full max-w-[600px]">
            @csrf
            <input
                type="text"
                name="rssLink"
                class="w-full bg-[#0d1829] flex bg-transparent pl-2 text-[#cccccc] outline-0"
                placeholder="Search by RSS link"
            />
            <button type="submit" class="relative p-2 bg-[#0d1829] rounded-full">
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/> </g>

                </svg>
            </button>
        </form>

        <div class="w-[50%] h-[50%] border border-white border-solid bg-gray-900 rounded-md">
            <a href="#" class="h-full w-full rounded-xl">

                <!-- Badge -->
                <p class="bg-sky-500 w-fit px-4 py-1 text-sm font-bold text-white rounded-tl-lg rounded-br-xl"> FEATURED </p>

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

                    <!-- Price -->
                    <div class="flex col-start-2 ml-4 md:col-start-auto md:ml-0 md:justify-end">
                        <p class="rounded-lg text-sky-500 font-bold bg-sky-100  py-1 px-3 text-sm w-fit h-fit"> $ 5 </p>
                    </div>

                </div>

            </a>
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
                        </div>
                        @if ($item['image'])
                            <img src="{{ $item['image'] }}" class="w-full h-auto" alt="{{ $item['title'] }}">
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </main>
@endif
