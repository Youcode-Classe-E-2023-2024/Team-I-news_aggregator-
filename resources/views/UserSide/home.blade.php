@include('Shared.components.header')

<body>
<style>
    /* Add this style to the head of your HTML document or in your CSS file */
    .h-screen {
        height: 100vh; /* Set the height to 100% of the viewport height */
        overflow-y: auto; /* Enable vertical scrolling */
    }
</style>
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

<div class="h-screen overflow-hidden relative" style="background: #edf2f7;">

    <img src="bg.png" class=" absolute top-0 left-0 min-h-full before:bg-black " alt="">

    <div class="relative h-full  flex items-center justify-center flex-col ">
        <img src="logo2.png" alt="Your Logo" class="max-w-full ">
        <h1>hy</h1>


    </div>

<div class="bg-[#f7d0b6] py-20">
    <div class="max-w-screen-lg mx-auto flex justify-between items-center">
        <div class="max-w-xl">
            <h2 class="font-black text-sky-950 text-3xl mb-4">As the leading experts in this field, we're in over 90 countries</h2>
            <p class="text-base text-sky-950">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <button class="text-sky-950 uppercase py-3 text-base px-10 border border-sky-950 hover:bg-sky-950 hover:bg-opacity-10">Get started</button>
    </div>
</div>
<div class="py-12 relative overflow-hidden bg-white">
    <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
        <div class="w-full flex flex-col items-end pr-16">
            <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
            <div class="h-full mt-auto overflow-hidden relative">
                <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
            </div>
        </div>

        <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
            <div class="relative z-20 pl-12">
                <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                <p class="text-white text-sm">
                    Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                </p>
                <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
            </div>
        </div>
    </div>
</div>

<div class="py-4 relative overflow-hidden bg-white">
    <div class="grid grid-cols-2 max-w-screen-lg mx-auto">


        <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-[#f7d0b6] before:top-0 before:right-0">
            <div class="relative z-20 pl-12">
                <h2 class="text-sky-950 font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                <p class="text-sky-950 text-sm">
                    Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                </p>
                <button class="mt-8 text-sky-950 uppercase py-3 text-sm px-10 border border-sky-950 hover:bg-white hover:bg-opacity-10">Talk with expert</button>
            </div>
        </div>
        <div class="w-full flex flex-col pl-16">
            <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-left mb-12 mt-10">Whether you need Assistance</h2>
            <div class="h-full mt-auto overflow-hidden relative">
                <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
            </div>
        </div>

    </div>
</div>

<div class="py-12 relative overflow-hidden bg-white">
    <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
        <div class="w-full flex flex-col items-end pr-16">
            <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
            <div class="h-full mt-auto overflow-hidden relative">
                <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
            </div>
        </div>

        <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
            <div class="relative z-20 pl-12">
                <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                <p class="text-white text-sm">
                    Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                </p>
                <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
            </div>
        </div>
    </div>
</div>
</div>
</body>

