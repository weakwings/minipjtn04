<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <div class="p-10 bg-white rounded shadow-md">
        <h1 class="mb-4 text-3xl font-bold text-center">Student Details</h1>
        <div class="mb-4">
            <p><strong>Name:</strong> {{ $student->name }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Last name:</strong> {{ $student->surname }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Email:</strong> {{ $student->email }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Age:</strong> {{ $student->age }}</p>
        </div>
        <div class="mb-4">
            <p><strong>City:</strong> {{ $student->city }}</p>
        </div>
        <div class="mb-4">
            <p><strong>Address:</strong> {{ $student->address }}</p>
        </div>
        <h2 class="mt-4 mb-2 text-xl font-bold">Courses:</h2>
        <ul class="pl-5 mb-4 list-disc">
            @foreach ($student->courses as $course)
                <li>{{ $course->matrix_course }}</li>
            @endforeach
        </ul>
        <div class="flex justify-center mt-4">
            <a href="{{ route('student.index') }}"
                class="px-4 py-2 text-white bg-purple-900 rounded hover:bg-purple-600">Return</a>
        </div>
    </div>
</body>

</html>
