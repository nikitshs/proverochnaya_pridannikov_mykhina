<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Главная страница</title>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <x-header>
    </x-header>

    
    <main class="flex-grow max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-extrabold mb-6 text-center md:text-left">
            Добро пожаловать на мой сайт!
        </h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 ">
            
            <img src="{{ Vite::asset('resources/images/dns.jpg') }}" alt="img" class="w-full h-auto object-cover rounded-xl">
            

            <div class="space-y-4 text-lg">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </main>

   
    <x-footer>   
    </x-footer>

</body>
</html>
