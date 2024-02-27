@include('Shared.components.header')

<body>

<style>
    /* Add this style to the head of your HTML document or in your CSS file */
    .h-screen {
        height: 100vh; /* Set the height to 100% of the viewport height */
        overflow-y: auto; /* Enable vertical scrolling */
    }
</style>
<x-Navbar :links="['Home' => '/home', 'Trend' => '/Trend','Favorites' => '/Favorites', 'Categories' => '/categories', 'Profile' => '/Profile','Details' => '/Details']" />
<div class="h-screen overflow-hidden relative" style="background: #edf2f7;">

    <img src="bg.png" class=" absolute top-0 left-0 min-h-full before:bg-black " alt="">

    <div class="relative h-full  flex items-center justify-center flex-col ">
        <h1>Welcome</h1>
        <img src="logo2.png" alt="Your Logo" class="max-w-full ">
        <div>
            <form class="m-4 flex">
                <input class="rounded-l-lg p-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white" placeholder="your@mail.com"/>
                <button class="px-8 rounded-r-lg bg-yellow-400  text-gray-800 font-bold p-4 uppercase border-gray-500 border-t border-b border-r">Subscribe</button>
            </form>
        </div>

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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/flickity@2.2.2/dist/flickity.pkgd.min.js"></script>

</body>

