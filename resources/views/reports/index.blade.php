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
        
            <p >Гос номер: {{$report->number}}</p>
            <p>Описание: {{$report->description}}</p>
            <p>Дата создания заявки: {{$report->created_at}}</p>
            <p>Статус заявления: {{$report->status->name}}</p>
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

        <div>
        <span>Сортировка по дате создания:</span>
        <div class="flex items-center gap-2 mb-4">
            <a href="{{ route('reports.index', ['sort' => 'desc', 'status' => $status]) }}" class="inline-block px-3 py-1.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100 transition">
                Сначала новые
            </a>

            <a href="{{ route('reports.index', ['sort' => 'asc', 'status' => $status]) }}" class="inline-block px-3 py-1.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100 transition">
                Сначала старые
            </a>
        </div>
        </div>

        <div>
            <p>Фильтрация по списку заявки:</p>
            <ul class="flex flex-col gap-2.5">
                @foreach($statuses as $status)
                <li class="">
                    <a href="{{route('reports.index', ['sort' => $sort, 'status' => $status->id])}}" class="inline-block px-3 py-1.5 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded hover:bg-gray-100 transition">
                        {{$status->name}}
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        {{ $reports->appends(request()->query())->links() }}



    </main>
</body>
</html>