<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Index</title>
</head>
<body class="bg-neutral-950">
    <div class="grid grid-cols-2 gap-4">
        <div>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-500">
                            NAME
                        </th>
                        <th class="px-6 py-3 text-left text-gray-500">
                            YEAR
                        </th>
                        <th class="px-6 py-3 text-left text-gray-500">
                            TIMES SOLD
                        </th>
                        <th class="px-6 py-3 text-left text-gray-500">
                            ACTIONS
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-neutral-900 border-y-2 text-white">
                    @foreach ($albums as $album)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $album->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $album->year }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $album->times_sold }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('album/' . $album->id . '/edit' )}}" class="text-blue-600">Edit</a>
                                <form action="{{ url('album/' . $album->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>        
            </table>
            <button class="bg-green-500 text-white py-2 px-4 m-3 rounded">
                <a href="album/create">Create</a>
              </button>
        </div>

        <div>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-gray-500">
                            NAME
                        </th>
                        <th class="px-6 py-3 text-left text-gray-500">
                            GENRE
                        </th>
                        <th class="px-6 py-3 text-left text-gray-500">
                            FOUNDED
                        </th>
                        <th class="px-6 py-3 text-left text-gray-500">
                            ACTIONS
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-neutral-900 border-y-2 text-white">
                    @foreach ($bands as $band)
                        <tr>
                            <td class="px-6 py-4">
                                {{ $band->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $band->genre }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $band->founded }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ url('band/' . $band->id . '/edit') }}" class="text-blue-600">Edit</a>
                                <form action="{{ url('band/' . $band->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>        
            </table>
            <button class="bg-green-500 text-white py-2 px-4 m-3 rounded">
                <a href="band/create">Create</a>
              </button>
        </div>
    </div>
</body>
</html>