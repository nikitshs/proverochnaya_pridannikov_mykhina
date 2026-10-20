<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method="POST" action="{{ route('reports.store') }}">
      
        @csrf

    <div>
        <label for="number">Номер авто:</label>
        <input type="text" name="number">
    </div>

    <div>
        <label for="description">Описание заявки:</label>
        <textarea name="description"></textarea>
    </div>

    <button type="submit">Создать</button>
</form>
</body>
</html>