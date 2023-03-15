<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Заявки</title>
</head>

<body>
    <ul>
        <li class="nav-item py-2 pr-2 md:pl-2">
            <a class="nav-link text-dark-900 hover:text-blue-900 focus:text-blue-900 p-0" href="{{route('admin.index')}}">Back</a>
        </li>
    </ul>

    <table class="border-b bg-gray-800 boder-gray-900 text-white mt-5 ml-5 w-1/2 table-auto ">
        <thead>
            <tr>
                <th>Заявки</th>
                <th>Количество</th>
                <th>Телефон</th>
                <th>Емаил</th>
                <th class="">Action</th>

            </tr>
        </thead>
        @foreach($buy_tovars as $buy_tovar)
        <tbody class="text-center">
            <tr>
                <td>{{$buy_tovar->id}}</td>
                <td>{{$buy_tovar->col}}</td>
                <td>+{{$buy_tovar->tel}}</td>
                <td>{{$buy_tovar->email}}</td>
                <td class="flex space-x-2 mt-6 ml-5 mb-5 ">
                <a href="{{route('admin.edit2', $buy_tovar->id)}}" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg  text-white">Edit</a>
                <form class="px-5 py-0 bg-red-500 hover:bg-red-700 rounded-lg  text-white" method="POST" action="{{ route('admin.destroy', $buy_tovar->id) }}">
                        @csrf
                        @method('delete')
                        <button class="py-1 px-0 h-10" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
</body>

</html>
