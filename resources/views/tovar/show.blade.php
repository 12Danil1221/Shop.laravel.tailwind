<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Show tovar id</title>
    <style>
        body {
            position: relative;
            width: 100%;
            height: 0px;

            /* dark */

            background: #242B33;
        }
    </style>
</head>

<body>
    <div class="flex justify-left ml-10 mt-10 ">
        <div class="rounded-lg shadow-lg bg-white max-w-sm border-5  border border-gray-600 bg-gray-400 p-1">
            <a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
                <img class="rounded-t-lg" src="{{Storage::url($tovar->image)}}" alt="" />
            </a>
            <div class="p-6 ">
                <h5 class="text-gray-900 text-xl font-medium mb-2">
                    {{$tovar->name}}
                </h5>
                <p class="text-gray-700 text-base mb-4">
                    {{$tovar->description}}
                </p>
                <div class="px-0 pt-2 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                        {{$tovar->price}} руб.
                    </span>
                </div>
                @if(Auth::user())
                <a href="{{route('tovarbuy.buy')}}" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Buy</a>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
