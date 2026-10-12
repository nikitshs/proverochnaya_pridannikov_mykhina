<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Список продуктов</title>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <x-header>
    </x-header>
   
      
    <main class="flex-grow w-full px-4 py-8 max-w-6xl mx-auto">
        <h1 class="text-3xl font-extrabold mb-6 text-center">Список продуктов</h1>

       
        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <a href="{{ route('array.shuffle') }}" 
               class="px-4 py-2 bg-orange-500 rounded-md hover:bg-orange-600 font-bold">
                Перемешать
            </a>
            <a href="{{ route('array.sort') }}" 
               class="px-4 py-2 bg-orange-500 rounded-md hover:bg-orange-600 font-bold">
                По цене
            </a>
            <a href="{{ route('array.filter') }}" 
               class="px-4 py-2 bg-orange-500 rounded-md hover:bg-orange-600 font-bold">
                Только > 1000₽
            </a>
            <a href="{{ route('array') }}" 
               class="px-4 py-2 bg-red-600 rounded-md hover:bg-red-700 font-bold">
                 Сбросить
            </a>
        </div>

        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $item)
                <div class="bg-white rounded-xl shadow-sm flex flex-col">
                    <div class="relative h-48 w-full">
                        <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" 
                             alt="img" 
                             class="w-full h-full object-cover border-b">
                    </div>

                    <div class="p-5 flex flex-col flex-grow justify-between">
                        
                        <h3 class="text-lg font-bold mt-1 mb-2">{{ $item['title'] }}</h3>
                        
                        
                        <div class="flex justify-between items-center mt-4 pt-4">
                            <p class="text-xl font-black text-red-600">{{$item['price']}} ₽</p>
                            <button class="px-4 py-2 bg-red-600 rounded-md hover:bg-red-700 font-bold cursor-pointer">
                                Купить
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    
        <div class="mt-8 text-center">
            <a href="{{ route('home') }}" class="items-center text-red-600 hover:text-red-700 font-black">
                Вернуться на главную
            </a>
        </div>
    </main>

   
    <x-footer>
    </x-footer>    

</body>
</html>