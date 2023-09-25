<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="p-10 bg-white rounded shadow-md">
        <h1 class="mb-4 text-3xl font-bold text-center">Teacher Details</h1>
        <div class="mb-4">
            <p><strong>Name:</strong> {{ $teacher->name }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Last name:</strong> {{ $teacher->surname }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Email:</strong> {{ $teacher->email }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Age:</strong> {{ $teacher->age }}</p>
        </div>
        <div class="mb-4">
            <p><strong>City:</strong> {{ $teacher->city }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Address:</strong> {{ $teacher->address }}</p>
        </div>
        <div class="flex justify-center mt-4">
            <a href="{{ route('teacher.index') }}"
                class="px-4 py-2 text-white bg-purple-900 rounded hover:bg-purple-600">Return</a>
        </div>
    </div>
</body>

</html>
