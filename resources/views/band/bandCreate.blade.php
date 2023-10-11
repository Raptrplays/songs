<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create band</title>
</head>
<body class="bg-neutral-950">
    <form action="/band" method="post" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" placeholder="name" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>

        <div class="mb-4">
            <label for="genre" class="block text-gray-700 font-bold mb-2">Genre</label>
            <input type="text" id="genre" name="genre" placeholder="genre" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>

        <div class="mb-6">
            <label for="founded" class="block text-gray-700 font-bold mb-2">Founded</label>
            <input type="text" id="founded" name="founded" placeholder="founded" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    <div>
        <button class="bg-green-500 text-white py-2 px-4 m-3 rounded" type="submit">Submit</button>
    </div>
    </form>

</body>
</html>
