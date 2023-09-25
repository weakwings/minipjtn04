<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="p-10 bg-white rounded shadow-md">
        <h1 class="mb-8 text-3xl font-bold text-center">Edit teacher</h1>
        <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" class="space-y-8">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-2">
                <div class="w-full px-2 md:w-1/2 md:pr-10">
                    <div>
                        <label for="name" class="font-bold">Name:</label>
                        <input type="text" name="name" id="name" value="{{ $teacher->name }}"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="pt-4">
                        <label for="surname" class="font-bold">Surname:</label>
                        <input type="text" name="surname" id="surname" value="{{ $teacher->surname }}"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="pt-4">
                        <label for="email" class="font-bold">Email:</label>
                        <input type="text" name="email" id="email" value="{{ $teacher->email }}"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>

                <div class="w-full px-2 md:w-1/2 md:pl-10">
                    <div>
                        <label for="age" class="font-bold">Age:</label>
                        <input type="text" name="age" id="age" value="{{ $teacher->age }}"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="pt-4">
                        <label for="city" class="font-bold">City:</label>
                        <input type="text" name="city" id="city" value="{{ $teacher->city }}"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div class="pt-4">
                        <label for="address" class="font-bold">Address:</label>
                        <input type="text" name="address" id="address" value="{{ $teacher->address }}"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>
            </div>

            <div class="flex justify-between pt-2 mt-8">
                <a href="{{ route('teacher.index') }}"
                    class="px-4 py-2 text-white bg-purple-300 rounded hover:bg-purple-400">Cancel</a>
                <button type="submit"
                    class="px-4 py-2 text-white bg-purple-900 rounded hover:bg-purple-600">Save</button>
            </div>
        </form>
    </div>
</body>

</html>
