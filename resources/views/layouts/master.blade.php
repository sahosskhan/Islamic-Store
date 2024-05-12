<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <title>Islamic Store</title>
    @vite('resources/css/app.css')
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/8c20b98a6a.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Navbar -->
    <nav x-data="{ isOpen: false }" class="relative bg-amber-200 shadow ">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex  gap-2 items-center justify-between">
            <img class="h-10" src="https://i.ibb.co/2dRzgGf/image.png" alt="">
            <p class="font-semibold text-2xl uppercase">Islamic Store</p>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-amber-100  md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div class="flex flex-col md:flex-row md:mx-6">
                <a href="{{url('/')}}" class="my-2 text-xl text-black transition-colors duration-300 transform  hover:text-amber-500  md:mx-4 md:my-0 font-semibold uppercase" >Home</a>
                <a href="{{url('/front-products')}}" class="my-2 text-xl text-black transition-colors duration-300 transform  hover:text-amber-500  md:mx-4 md:my-0 font-semibold uppercase" >Products</a>
              
                @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/dashboard') }}" class="my-2 text-xl text-black transition-colors duration-300 transform  hover:text-amber-500  md:mx-4 md:my-0 font-semibold uppercase" >Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="my-2 text-xl text-black transition-colors duration-300 transform  hover:text-amber-500  md:mx-4 md:my-0 font-semibold uppercase" >Log in</a>
                        
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="my-2 text-xl  transition-colors duration-300 transform  hover:text-amber-500  md:mx-4 md:my-0 font-semibold text-black uppercase" >Register</a>
                            
                        @endif
                    @endauth
            @endif
            </div>

        </div>
    </div>
</nav>

@yield('content')



<!-- footer -->

<footer class="flex justify-center items-center p-4 bg-amber-50 text-lg">
  <aside>
    <p>Copyright © 2024 - All right reserved by Islamic Store Corporation</p>
  </aside>
</footer>

    
</body>
</html>