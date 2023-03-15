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
        <a href="{{route('admin.tovar')}}">Back</a>
    </div>
    <div class="items-center w-full  max-w-xs ml-5 mt-5 w-full pl-2 pr-2 pb-2 border border-[#334155] bg-[#334155]">

        <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
            @csrf
            <div class="sm:col-span-6">
                <div class="form-group">
                    <label for="image">Добавить превью</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input " name="image">
                            <label class="custom-file-label">Выберите изображение</label>
                        </div>
                        <!-- ERROR -->
                        @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        <div class="mt-2 input-group-append">
                            <span class="input-group-text">Загрузка</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-[#f8fafc] text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Name">
            </div>
            <div class="mb-6">
                <label class="block text-[#f8fafc] text-sm font-bold mb-2" for="description">
                    description
                </label>
                <textarea class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" placeholder="Description"></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-[#f8fafc] text-sm font-bold mb-2" for="price">
                    Price
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" type="text" placeholder="Price">
            </div>
            <div class="flex items-center justify-between">
                <input class="w-20 h-8 bg-[#10b981] rounded ml-3 text-white bg-color:green hover:text-[#1e40af]" type="submit" value="Create">

            </div>
        </form>
    </div>
</body>

</html>
