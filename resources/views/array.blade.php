<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Список продуктов</title>
</head>
<body class="bg-gray-50 text-gray-800 antialiased flex flex-col min-h-screen">

    
    <header class="bg-white shadow-sm border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-xl font-bold text-indigo-600 tracking-tight">
                <a href="{{ route('home') }}">MySiteLogo</a>
            </div>
            <nav>
                <ul class="flex space-x-6 font-medium text-gray-600">
                    <li><a href="{{ route('home') }}" class="hover:text-indigo-600 transition">Главная</a></li>
                    <li><a href="{{ route('array') }}" class="text-indigo-600">Массивы</a></li>
                </ul>
            </nav>
        </div>
    </header>
      
    <main class="flex-grow w-full px-4 py-8 max-w-6xl mx-auto">
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6 text-center">Список продуктов</h1>

       
        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <a href="{{ route('array.shuffle') }}" 
               class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:border-indigo-300 hover:text-indigo-700 transition shadow-sm">
                🔀 Перемешать
            </a>
            <a href="{{ route('array.sort') }}" 
               class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:border-indigo-300 hover:text-indigo-700 transition shadow-sm">
                📊 По цене ↑
            </a>
            <a href="{{ route('array.filter') }}" 
               class="px-4 py-2 bg-white border border-gray-200 rounded-lg text-sm font-medium text-gray-700 hover:bg-indigo-50 hover:border-indigo-300 hover:text-indigo-700 transition shadow-sm">
                🔍 Только > 1000₽
            </a>
            <a href="{{ route('array') }}" 
               class="px-4 py-2 bg-indigo-600 rounded-lg text-sm font-medium text-white hover:bg-indigo-700 transition shadow-sm">
                 Сбросить
            </a>
        </div>

        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($products as $item)
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-md transition flex flex-col">
                    <div class="relative h-48 w-full bg-gray-100 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" 
                             alt="{{ $item['title'] }}" 
                             class="w-full h-full object-cover">
                    </div>

                    <div class="p-5 flex flex-col flex-grow justify-between">
                        <div>
                            <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">ID: {{ $item['id'] }}</span>
                            <h3 class="text-lg font-bold text-gray-800 mt-1 mb-2">{{ $item['title'] }}</h3>
                        </div>
                        
                        <div class="flex justify-between items-center mt-4 pt-4 border-t border-gray-50">
                            <p class="text-xl font-black text-indigo-600">{{ number_format($item['price'], 0, ',', ' ') }} ₽</p>
                            <button class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium px-4 py-2 rounded-lg transition">
                                Купить
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    
        <div class="mt-8 text-center">
            <a href="{{ route('home') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition">
                ← Вернуться на главную
            </a>
        </div>
    </main>

   
    <footer class="bg-gray-900 text-gray-400 py-6 mt-auto">
        <div class="max-w-6xl mx-auto px-4 text-center text-sm">
            <p>&copy; {{ date('Y') }} | Приданников Никита | Все права защищены.</p>
        </div>
    </footer>

</body>
</html>