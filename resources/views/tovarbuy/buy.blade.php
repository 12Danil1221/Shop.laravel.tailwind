<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Buy tovar</title>
</head>

<body class="font-mono bg-gray-400">

    <!-- Container -->
    <div class="container mx-auto mt-3">
        <a class="" href="{{route('index')}}">Back</a>

        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://www.stylenews.ru/wp-content/uploads/2017/03/11c1f9f2-2894-4641-8b7f-32a5c4f03431.jpg')"></div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Заполните заявку</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post" action="{{route('stepOne')}}">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="col">
                                    Col
                                </label>
                                <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="col" name="col" type="text" placeholder="Colich" />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="tel">
                                    Tel
                                </label>
                                <input value="" class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="tel" name="tel" type="telephone" placeholder="Telephone" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="email" name="email" type="email" placeholder="Email" />
                        </div>

                        <div class="mb-4">
                            <select name="tovarname" id="tovarname">
                                <option class="block mb-2 text-sm font-bold text-gray-700" for="tovarname">
                                    Piano
                                </option>
                                <option class="block mb-2 text-sm font-bold text-gray-700 " for="tovarname">
                                    Gitar
                                </option>
                            </select>
                        </div>

                        <div class="mb-6 text-center">
                            <button type="submit" class="py-0 px-4 bg-blue-500 hover:bg-blue-400 rounded ml-3 mb-3 w-25 h-8">Оставить заявку</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
