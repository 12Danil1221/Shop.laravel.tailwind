<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>MusicHouse</title>
    <style>
        body{
            position: relative;
            width: 100%;
            height: 0px;

            /* dark */

            background: #242B33;
        }
        head{
            position: relative;
            width: 1920px;
            height: 2000px;

            /* dark */

            background: #242B33;
        }
        .box{
            background-image: url('/public/iPhone.png');
        }



    </style>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>




    <div class="bg-gray-800 shadow-md" x-data="{ isOpen: false }">
        <nav class="container px-6 py-8 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a class="text-xl font-bold text-transparent bg-clip-text text-white from-green-400 to-blue-500 md:text-2xl hover:text-green-400" href="#">
                    MusicHouse
                </a>


                <!-- Mobile menu button -->
                <div @click="isOpen = !isOpen" class="flex md:hidden">
                    <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                <a class="text-transparent bg-clip-text text-white from-black-400 to-blue-500 hover:text-black-400" href="/">Home</a>
                <a class="text-transparent bg-clip-text text-white from-black-400 to-blue-500 hover:text-black-400" href="{{route('geolocation')}}">Geolocation</a>
                <a class="text-transparent bg-clip-text text-white from-black-400 to-blue-500 hover:text-black-400" href="http://127.0.0.1:8000/register">Registration</a>
                <a class="text-transparent bg-clip-text text-white from-black-400 to-blue-500 hover:text-black-400" href="http://127.0.0.1:8000/home">Login</a>


            </div>
        </nav>
    </div>

    <div class="font-sans text-gray-900 antialiased min-h-screen">

        @foreach($tovars as $tovar)
        <div class="compact inline-block ml-5 mt-5 mb-5 rounded-lg border-5 border border-gray-600 bg-gray-400 p-1">
            <div class="max-w-sm rounded overflow-hidden shadow-lg ">
                <img class="" src="{{Storage::url($tovar->image)}}" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$tovar->name}}</div>
                    <p class="text-gray-700 text-base">
                    {{$tovar->description}}
                </p>
                </div>
                <div class="px-6 py-4">
                    <a href="{{ route('tovar.show', $tovar->id) }}" class="hover:text-[#2563eb]">Подробнее</a>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        {{$tovar->price}} руб.
                    </span>
                </div>

            </div>
        </div>

        @endforeach
    </div>
    <footer class="bg-gray-800 border-t border-gray-200">
        <div class="container flex flex-wrap items-center justify-center px-4 py-8 mx-auto lg:justify-between">
            <div class="flex flex-wrap justify-center">
                <ul class="flex items-center space-x-4 text-white">
                    <li>Home</li>
                    <li>About</li>
                </ul>
            </div>
            <div class="flex justify-center mt-4 lg:mt-0">
                <a>
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-600" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-blue-300" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>


            </div>
        </div>
    </footer>
</body>

</html>
