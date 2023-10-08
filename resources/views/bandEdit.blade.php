<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit band</title>
</head>
<body class="bg-neutral-950">
    <form action="{{ url('band/' . $band->id) }}" class="max-w-md mx-auto bg-neutral-900 p-6 rounded-lg mt-10" method="POST">
        @csrf
        @method('put')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
            <input type="text" id="name" name="name" value=" {{ $band->name }} " placeholder="name" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="genre">Genre</label>
            <input type="text" id="genre" name="genre" value=" {{ $band->genre }} " placeholder="genre" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="founded">Founded</label>
            <input type="text" id="founded" name="founded" value=" {{ $band->founded }} " placeholder="founded" class="border-black border rounded w-full py-2 px-3 text-gray-700 bg-neutral-200">
        </div>
    
        <div>
            <button type="submit" class="bg-green-500 text-white py-2 px-4 m-3 rounded">Submit</button>
        </div>
    </form>
            
</body>
</html>