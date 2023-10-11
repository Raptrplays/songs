<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Create album</title>
</head>
<body class="bg-neutral-950">
    <form action="/album" method="post" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
            <input type="text" id="name" name="name" placeholder="name" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div class="mb-4">
            <label for="year" class="block text-gray-700 font-bold mb-2">Year</label>
            <input type="text" id="year" name="year" placeholder="year" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div class="mb-6">
            <label for="times_sold" class="block text-gray-700 font-bold mb-2">Times sold</label>
            <input type="text" id="times_sold" name="times_sold" placeholder="times sold" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    <div>
        <button class="bg-green-500 text-white py-2 px-4 m-3 rounded" type="submit">Submit</button>
    </div>
    </form>
        
</body>
</html>