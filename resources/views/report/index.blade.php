<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        @foreach ($reports as $report)
            <p>Гос номер: {{$report['number']}}</p>
            <p>Описание: {{$report['description']}}</p>
            <p>Дата создания заявки: {{$report['created_at']}}</p>

            <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                @method('delete')
                @csrf
                <input type="submit" value="Удалить">
            </form>
        @endforeach
    </main>
</body>
</html>