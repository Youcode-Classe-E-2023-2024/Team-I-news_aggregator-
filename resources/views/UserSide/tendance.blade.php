@include('Shared.components.header')

<body >

<x-Navbar :links="['Home' => '/home', 'Page 2' => '/page2']" />
  

<div  style="background-color: rgba(0, 0, 0, 0.403); box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" class=" w-11/12 backdrop-blur-sm shadow-md  my-14 justify-between items-center  rounded-lg flex  mx-auto px-12 border ">
    <div class="lg:flex items-stretch md:mt-12 p-4    w-10/12 ">
      <div class="lg:w-1/2">


        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6">
          
          <div class="sm:w-1/2 relative">
            <div>
              <p class="mt-auto text-xs dark:text-gray-400">{{ $rssItems[0]->created_at->format('d F Y') }}</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">{{ $rssItems[0]->name }}</h2>
                <p class="text-base leading-4 text-white mt-2">{{ $rssItems[0]->categorie }}</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="{{ $rssItems[0]->image }}" class="w-full" alt="chair" />
          </div>



          <div class="sm:w-1/2 sm:mt-0 mt-4 relative">
            <div>
              <p class="mt-auto text-xs dark:text-gray-400">{{ $rssItems[1]->created_at->format('d F Y') }}</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">{{$rssItems[1]->name}}</h2>
                <p class="text-base leading-4 text-white mt-2">{{$rssItems[1]->categorie}}</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="{{$rssItems[1]->image}}" class="w-full" alt="wall design" />
          </div>

        </div>



        <div class="relative">
          <div>
            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">{{ $rssItems[2]->created_at->format('d F Y') }}</p>
            <div class="absolute bottom-0 left-0 md:p-10 p-6">
              <h2 class="text-xl font-semibold 5 text-white">{{ $rssItems[2]->name }}</h2>
              <p class="text-base leading-4 text-white mt-2">{{ $rssItems[2]->categorie }}</p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
          <img src="{{$rssItems[2]->image}}" alt="sitting place" class="w-full mt-8 md:mt-6 hidden sm:block" />
          <img class="w-full mt-4 sm:hidden" src="https://i.ibb.co/6XYbN7f/Rectangle-29.png" alt="sitting place" />
        </div>
      </div>


<!--
----------------------------------
----------------------------------
----------------------------------
-->





      <div class="lg:w-1/2 xl:ml-8 lg:ml-4 lg:mt-0 md:mt-6 mt-4 lg:flex flex-col justify-between">

        <div class="relative">
          <div>
            <p class="md:p-10 p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">{{ $rssItems[3]->created_at->format('d F Y') }}</p>
            <div class="absolute bottom-0 left-0 md:p-10 p-6">
              <h2 class="text-xl font-semibold 5 text-white">{{ $rssItems[3]->name}}</h2>
              <p class="text-base leading-4 text-white mt-2">{{ $rssItems[3]->categorie}}</p>
              <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </a>
            </div>
          </div>
          <img src="{{ $rssItems[3]->image}}" alt="sitting place" class="w-full sm:block hidden" />
          <img class="w-full sm:hidden" src="https://i.ibb.co/dpXStJk/Rectangle-29.png" alt="sitting place" />
        </div>



        <div class="sm:flex items-center justify-between xl:gap-x-8 gap-x-6 md:mt-6 mt-4">


          <div class="relative w-full">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">{{ $rssItems[4]->created_at->format('d F Y') }}</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">{{ $rssItems[4]->name }}</h2>
                <p class="text-base leading-4 text-white mt-2">{{ $rssItems[4]->categorie }}</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="{{ $rssItems[4]->image }}" class="w-full" alt="chair" />
          </div>

          <div class="relative w-full sm:mt-0 mt-4">
            <div>
              <p class="p-6 text-xs font-medium leading-3 text-white absolute top-0 right-0">{{ $rssItems[5]->created_at->format('d F Y') }}</p>
              <div class="absolute bottom-0 left-0 p-6">
                <h2 class="text-xl font-semibold 5 text-white">{{ $rssItems[5]->name }}</h2>
                <p class="text-base leading-4 text-white mt-2">{{ $rssItems[5]->categorie }}</p>
                <a href="javascript:void(0)" class="focus:outline-none focus:underline flex items-center mt-4 cursor-pointer text-white hover:text-gray-200 hover:underline">
                  <p class="pr-2 text-sm font-medium leading-none">Read More</p>
                  <svg class="fill-stroke" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.75 12.5L10.25 8L5.75 3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </a>
              </div>
            </div>
            <img src="{{ $rssItems[5]->image }}" class="w-full" alt="wall design" />
          </div>
        </div>
      </div>

      
  
  </div>





<!--
----------------------------------
----------------------------------
----------------------------------
-->






  <div style="box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;" class=" w-3/12 border-l-2   border-black h-screen px-4 ml-4 ">
  <div class="overflow-y-auto py-2 ">
			<div class="mb-8 space-x-5 border-b-2 border-opacity-10 dark:border-violet-400">
				<button type="button" class="pb-5 text-xs font-bold uppercase border-b-2 dark:border-violet-400">Latest</button>
				<button type="button" class="pb-5 text-xs font-bold uppercase border-b-2 dark:border-transparent dark:text-gray-400">Popular</button>
			</div>



			<div class="flex flex-col divide-y dark:divide-gray-700">
        
				<div class="flex px-1 py-4">
					<img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="{{ $rssItems[6]->image }}">
					<div class="flex flex-col flex-grow">
						<a rel="noopener noreferrer" href="#" class="font-serif text-red font-bold hover:underline">{{ $rssItems[6]->name }}</a>
            <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 font-bold lg:ml-2 lg:inline hover:underline">{{ $rssItems[6]->categorie }}</a>
            <p class="mt-auto text-xs dark:text-gray-400">{{ $rssItems[6]->created_at->format('d F Y') }}</p>
					</div>
				</div>
				<div class="flex px-1 py-4">
					<img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="{{ $rssItems[7]->image }}">
					<div class="flex flex-col flex-grow">
						<a rel="noopener noreferrer" href="#" class="font-serif text-red font-bold hover:underline">{{ $rssItems[7]->name }}</a>
            <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 font-bold lg:ml-2 lg:inline hover:underline">{{ $rssItems[7]->categorie }}</a>
            <p class="mt-auto text-xs dark:text-gray-400">{{ $rssItems[7]->created_at->format('d F Y') }}</p>
					</div>
				</div>
				<div class="flex px-1 py-4">
					<img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="{{ $rssItems[8]->image }}">
					<div class="flex flex-col flex-grow">
						<a rel="noopener noreferrer" href="#" class="font-serif text-red font-bold hover:underline">{{ $rssItems[8]->name }}</a>
            <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 font-bold lg:ml-2 lg:inline hover:underline">{{ $rssItems[8]->category }}</a>
            <p class="mt-auto text-xs dark:text-gray-400">{{ $rssItems[8]->created_at->format('d F Y') }}</p>
					</div>
				</div>
				<div class="flex px-1 py-4">
					<img alt="" class="flex-shrink-0 object-cover w-20 h-20 mr-4 dark:bg-gray-500" src="{{ $rssItems[9]->image }}">
					<div class="flex flex-col flex-grow">
						<a rel="noopener noreferrer" href="#" class="font-serif text-red font-bold hover:underline">{{ $rssItems[9]->name }}</a>
            <a rel="noopener noreferrer" href="#" class="block dark:text-blue-400 font-bold lg:ml-2 lg:inline hover:underline">{{ $rssItems[9]->category }}</a>
            <p class="mt-auto text-xs dark:text-gray-400">{{ $rssItems[9]->created_at->format('d F Y') }}</p>
					</div>
				</div>
				
			</div>
		</div>
  </div>
</div>
</body>

