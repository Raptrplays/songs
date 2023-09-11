<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create</title>
</head>

<body class="bg-emerald-900">
    <h1>Nummer toevoegen</h1>
    <form action="" method="POST">
        @csrf
        <label for="naamnummer">Naam nummer</label>
        <input type="text" name="naamnummer" id="naamnummer"> <br>
        <button class="bg-white"><input type="submit" value="Toevoegen"></button>
    </form>
</body>
</html>