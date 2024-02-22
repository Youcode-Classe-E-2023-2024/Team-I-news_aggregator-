@include('Shared.components.header')

<body>
<nav class="bg-black fixed w-full z-20 top-0 start-0 border-b border-gray-300 shadow-md dark:border-gray-600">
    <div class="w-4/5 flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="logonews.png" class="h-12" alt="Logo">
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  font-semibold border border-gray-300 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 space-y-2 md:space-y-0">LOGOUT</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="hidden w-full md:flex md:w-auto md:order-1 items-center justify-between" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-semibold border border-gray-300 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 space-y-2 md:space-y-0">
                <!-- Trending -->
                <li>
                    <a href="#" class="block py-3 px-4 text-gray-900 rounded-md hover:bg-gray-100 hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 focus:outline-none focus:ring focus:border-blue-300 transform hover:scale-105">Trends</a>
                </li>
                <!-- Categories -->
                <li>
                    <a href="#" class="block py-3 px-4 text-gray-900 rounded-md hover:bg-gray-100 hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 focus:outline-none focus:ring focus:border-blue-300 transform hover:scale-105">Categories</a>
                </li>
                <!-- Favorites -->
                <li>
                    <a href="#" class="block py-3 px-4 text-gray-900 rounded-md hover:bg-gray-100 hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 focus:outline-none focus:ring focus:border-blue-300 transform hover:scale-105">Favorites</a>
                </li>
                <!-- Home -->
                <li>
                    <a href="#" class="block py-3 px-4 text-gray-900 rounded-md hover:bg-gray-100 hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 focus:outline-none focus:ring focus:border-blue-300 transform hover:scale-105">Home</a>
                </li>
                <!-- Profile -->
                <li>
                    <a href="#" class="block py-3 px-4 text-gray-900 rounded-md hover:bg-gray-100 hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 focus:outline-none focus:ring focus:border-blue-300 transform hover:scale-105">Profile</a>
                </li>
                <!-- Details -->
                <li>
                    <a href="#" class="block py-3 px-4 text-gray-900 rounded-md hover:bg-gray-100 hover:text-blue-700 md:bg-transparent md:p-0 md:dark:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 focus:outline-none focus:ring focus:border-blue-300 transform hover:scale-105">Details</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


</body>

