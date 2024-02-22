<div class="h-screen flex flex-col w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
        <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
                <div class="flex flex-row items-center h-8">
                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                </div>
            </li>


{{--            @auth()--}}
{{--                <li>--}}
{{--                    <form action="#">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">--}}
{{--                        <span class="inline-flex justify-center items-center ml-4">--}}
{{--                          <ion-icon name="person-outline" class="text-2xl"></ion-icon>--}}
{{--                        </span>--}}
{{--                            <span class="ml-2 text-sm tracking-wide truncate">Profile</span>--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <form action="#" method="post">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="w-full relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">--}}
{{--                            <span class="inline-flex justify-center items-center ml-4">--}}
{{--                              <ion-icon name="log-out" class="text-2xl"></ion-icon>--}}
{{--                            </span>--}}
{{--                            <span class="ml-2 text-sm tracking-wide truncate">Lgout</span>--}}
{{--                        </button>--}}
{{--                    </form>--}}
{{--                </li>--}}

{{--            @endauth--}}

            <li>
                <a href="{{ route('adminDash') }}" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                          <ion-icon name="eye-outline" class="text-2xl"></ion-icon>
                        </span>
                    <span class="ml-2 text-sm tracking-wide truncate">Add RSS</span>
                </a>
            </li>

        </ul>
        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
    </div>
</div>
