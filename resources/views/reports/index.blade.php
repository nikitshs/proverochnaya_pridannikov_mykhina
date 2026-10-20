<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <main class="p-[50px]">
    <h1 class="text-3xl font-bold mb-[25px]">Список заявок</h1>
    
        <a href="{{ route('reports.create') }}" class="inline-block bg-orange-600 hover:bg-orange-700 text-white font-medium py-1.5 px-4 rounded transition duration-200 mb-[20px]">Создать заявление</a>
        @foreach ($reports as $report)
        
            <p >Гос номер: {{$report['number']}}</p>
            <p>Описание: {{$report['description']}}</p>
            <p>Дата создания заявки: {{$report['created_at']}}</p>
       <a href="{{ route('reports.edit', $report) }}" 
   class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-1.5 px-4 rounded transition duration-200">
    Изменить
</a>
</div>


            <form method="POST" action="{{route('reports.destroy', $report->id)}}" class="mb-[40px] mt-[20px]">
                @method('delete')
                @csrf
                <input type="submit" value="Удалить" class="pointer inline-block bg-red-600 hover:bg-red-700 text-white font-medium py-1.5 px-4 rounded transition duration-200">
            </form>
        @endforeach


    </main>
</body>
</html>