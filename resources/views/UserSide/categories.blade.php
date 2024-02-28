@include('Shared.components.header')

<body style="background-image: url('http://127.0.0.1:8000/images/anime_letters.jpg'); background-size: cover; background-position: center" class=" ">

<x-Navbar :links="['Home' => '/home', 'Trend' => '/Trend','Favorites' => '/Favorites', 'Categories' => '/Categories', 'Profile' => '/Profile','Details' => '/Details']" />

<div class="container mx-auto p-6">
    <div class="dark:bg-gray-800 dark:text-gray-50">
        <div class="container grid grid-cols-12 mx-auto">
            <div class="flex flex-col justify-center col-span-12 align-middle bg-no-repeat bg-cover dark:bg-gray-700 lg:col-span-6 lg:h-auto" style="background-image: url('bg.png'); background-position: center center; background-blend-mode: multiply; background-size: cover;">
                <div class="flex flex-col items-center p-8 py-12 text-center">
                    <span>NEWSNEST</span>
                    <h1 class="py-4 text-5xl font-bold">Explorer Nos Category</h1>
                </div>
            </div>
            <div class="flex flex-col col-span-12 p-6 divide-y lg:col-span-6 lg:p-10 dark:divide-gray-700">
                <div class="pt-6 pb-4 space-y-2">
                    <span>12 June</span>
                    <h1 class="text-3xl font-bold">Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, a!</p>
                    <a rel="noopener noreferrer" href="#" class="inline-flex items-center py-2 space-x-2 text-sm dark:text-violet-400">
                        <span>Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="pt-6 pb-4 space-y-2">
                    <span>12 June</span>
                    <h1 class="text-3xl font-bold">Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, a!</p>
                    <a rel="noopener noreferrer" href="#" class="inline-flex items-center py-2 space-x-2 text-sm dark:text-violet-400">
                        <span>Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="pt-6 pb-4 space-y-2">
                    <span>12 June</span>
                    <h1 class="text-3xl font-bold">Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, a!</p>
                    <a rel="noopener noreferrer" href="#" class="inline-flex items-center py-2 space-x-2 text-sm dark:text-violet-400">
                        <span>Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>

</body>
