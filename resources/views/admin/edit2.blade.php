<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <title>Document</title>
</head>

<body>
    <div class="ml-6 mt-2 mb-4">
        <a href="{{route('tovarbuy.zayavky')}}">Back</a>
    </div>
    <div class="items-center w-full  max-w-xs ml-5 mt-5 w-full pl-2 pr-2 pb-2 border border-[#334155] bg-[#334155]">

        <form method="POST" action="{{ route('admin.update2', $buy_tovar->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4 mt-4">
                <label class="block text-[#f8fafc] text-sm font-bold mb-2" for="col">
                    Colichest
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="col" name="col" type="text" value="{{$buy_tovar->col}}" placeholder="Col">
            </div>
            <div class="mb-4 mt-4">
                <label class="block text-[#f8fafc] text-sm font-bold mb-2" for="tel">
                    Telephone
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tel" name="tel" type="text" value="+{{$buy_tovar->tel}}" placeholder="Tel">
            </div>
            <div class="mb-4 mt-4">
                <label class="block text-[#f8fafc] text-sm font-bold mb-2" for="email">
                    email
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" value="{{$buy_tovar->email}}" placeholder="Email">
            </div>

            <button class="w-20 h-8 bg-blue-500 rounded ml-3 text-white hover:text-[#1e40af]"  type="submit">Update</button>

        </form>
    </div>
</body>

</html>
