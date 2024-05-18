@extends('layouts.master')
@section('content')
<main>
<div class="container px-6 py-16 mx-auto">
        <div class="items-center lg:flex">
            <div class="w-full lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-3xl font-semibold text-gray-800  lg:text-4xl">Best place to choose <br> your <span class="text-amber-500 ">products</span></h1>
                    
                    <p class="mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
                    
                    <button class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-amber-600 rounded-lg lg:w-auto hover:bg-amber-500 focus:outline-none focus:bg-amber-500">Shop Now</button>
                </div>
            </div>

            <div class="flex items-center justify-center  w-full mt-6 lg:mt-0 lg:w-1/2">
                <img class="w-full  rounded-xl lg:max-w-3xl hover:grayscale transition-all duration-500" src="https://i.ibb.co/gPm42N1/image.png" alt="pic">
            </div>
        </div>
    </div>


    <section class="">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-2xl font-semibold text-gray-800 text-center text-balance uppercase lg:text-5xl ">Explore <span class="underline decoration-amber-500">Services</span>  That We Provide</h1>


        <div class="grid grid-cols-1 gap-8 mt-16 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <div class="p-8 space-y-3 border-2 hover:scale-110 scale-100 transition-all duration-300 border-amber-400  rounded-xl">
                <span class="inline-block text-amber-500 ">
                <i class="fa-solid fa-truck-fast text-3xl"></i>
                </span>

                <h1 class="text-xl font-semibold text-gray-700 uppercase ">24/7 Home Delivery</h1>

                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                </p>

                <a href="#" class="inline-flex p-2 text-amber-500 capitalize transition-colors duration-300 transform bg-amber-100 rounded-full rtl:-scale-x-100   hover:underline hover:text-amber-600 ">
                <i class="fa-solid fa-angles-right text-xl"></i>
                </a>
            </div>

            <div class="p-8 space-y-3 border-2 hover:scale-110 scale-100 transition-all duration-300 border-amber-400  rounded-xl">
                <span class="inline-block text-amber-500 ">
                <i class="fa-regular text-3xl fa-credit-card"></i>
                </span>

                <h1 class="text-xl font-semibold text-gray-700 uppercase ">Secure Payment System</h1>

                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                </p>

                <a href="#" class="inline-flex p-2 text-amber-500 capitalize transition-colors duration-300 transform bg-amber-100 rounded-full rtl:-scale-x-100   hover:underline hover:text-amber-600 ">
                <i class="fa-solid fa-angles-right text-xl"></i>
                </a>
            </div>

            <div class="p-8 space-y-3 border-2 hover:scale-110 scale-100 transition-all duration-300 border-amber-400  rounded-xl">
                <span class="inline-block text-amber-500 ">
                <i class="fa-solid fa-star-of-life text-3xl"></i>
                </span>

                <h1 class="text-xl font-semibold text-gray-700 uppercase "> 100% Authentic & Halal</h1>

                <p class="text-gray-500 dark:text-gray-300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla quod dignissimos vel non corrupti doloribus voluptatum eveniet
                </p>

                <a href="#" class="inline-flex p-2 text-amber-500 capitalize transition-colors duration-300 transform bg-amber-100 rounded-full rtl:-scale-x-100   hover:underline hover:text-amber-600 ">
                <i class="fa-solid fa-angles-right text-xl"></i>
                </a>
            </div>
      
        </div>
    </div>
</section>





</main>
@endsection