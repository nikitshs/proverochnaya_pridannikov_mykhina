<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Document</title>
</head>
<body>
     <form method="POST" action="{{ route('reports.update', $report->id) }}">
      
        @csrf
        @method('put')
    <div>
        <label for="number">Изменить номер авто:</label>
        <input type="text" name="number" required  value="{{$report->number}}">
    </div>

    <div>
        <label for="description">Изменить описание:</label>
        <textarea name="description" required>{{$report->description}}</textarea>
    </div>

    <button type="submit" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-1.5 px-4 rounded transition duration-200">Обновить</button>
</form>
</body>
</html>