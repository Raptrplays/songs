<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Index</title>
</head>
<body class="bg-emerald-900">
    @foreach ($songs as $song)
        {{ $song }} <br>
    @endforeach
</body>
</html>