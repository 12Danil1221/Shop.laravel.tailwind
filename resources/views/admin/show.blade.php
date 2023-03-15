<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Tovar</title>
</head>

<body>
    <ul class="navbar-nav flex pl-0 list-style-none ml-5 mr-auto inline-block">
        <li class="nav-item py-2 pr-2 md:pl-2">
            <a class="nav-link text-dark-900 hover:text-blue-900 focus:text-blue-900 p-0" href="{{route('admin.tovar')}}">Back</a>
        </li>
        <li class="nav-item py-2 pr-2 md:pl-2">
            <a class="nav-link text-dark-900 hover:text-blue-900 focus:text-blue-900 p-0 ml-2" href="{{route('tovar.create')}}">Create tovar</a>
        </li>
    </ul>
    <table class="border-b bg-gray-800 boder-gray-900 text-white mt-2 w-1/2 table-auto ">
        <thead>
            <tr>
                <th>Tovar</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>



            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>{{$tovar->id}}</td>
                <td>
                    <img src="{{ Storage::url($tovar->image) }}" class="mt-2 w-20 h-20 rounded">
                </td>
                <td>{{$tovar->name}}</td>
                <td>{{$tovar->description}}</td>
                <td>{{$tovar->price}}</td>
                <td class="flex space-x-2 mt-6 ml-5"><a href="{{route('admin.edit', $tovar->id)}}" class="px-5 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg  text-white">Edit</a>

                    <form class="px-5 py-1 bg-red-500 hover:bg-red-700 rounded-lg  text-white" method="POST" action="{{ route('admin.destroy', $tovar->id) }}">
                        @csrf
                        @method('delete')
                        <button class="py-1 px-0 h-5" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
