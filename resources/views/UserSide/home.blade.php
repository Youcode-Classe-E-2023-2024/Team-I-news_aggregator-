@include('Shared.components.header')

<body>

<style>
    /* Add this style to the head of your HTML document or in your CSS file */
    .h-screen {
        height: 100vh; /* Set the height to 100% of the viewport height */
        overflow-y: auto; /* Enable vertical scrolling */
    }
</style>
<x-Navbar :links="['Home' => '/home', 'Trend' => '/Trend','Favoris' => '/Favoris', 'Trend' => '/Trend']" />
<div class="h-screen overflow-hidden relative" style="background: #edf2f7;">

    <img src="bg.png" class=" absolute top-0 left-0 min-h-full before:bg-black " alt="">

    <div class="relative h-full  flex items-center justify-center flex-col ">
        <img src="logo2.png" alt="Your Logo" class="max-w-full ">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="image1.jpg" alt="Image 1"></div>
                <div class="swiper-slide"><img src="image2.jpg" alt="Image 2"></div>
                <div class="swiper-slide"><img src="image3.jpg" alt="Image 3"></div>
                <!-- Ajoutez autant d'images que nécessaire -->
            </div>
            <!-- Ajoutez la pagination ici si nécessaire -->
            <div class="swiper-pagination"></div>
            <!-- Ajoutez les boutons de navigation ici si nécessaire -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
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
            // Options de Swiper, consultez la documentation pour plus d'options
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

