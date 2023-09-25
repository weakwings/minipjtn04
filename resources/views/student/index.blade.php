<!DOCTYPE html>
<html>

<head>
    <link
        href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;600&family=Vollkorn+SC:wght@400;600&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;600&family=Vollkorn+SC:wght@400;600&display=swap');

        body {
            font-family: 'Vollkorn', serif;
            background-color: #F2F2F2;
        }

        h1 {
            font-family: 'Vollkorn SC', serif;
            color: #262626;
        }

        th {
            color: #F2F2F2;
            background-color: rgb(88 28 135);
        }

        tr:nth-child(even) {
            background-color: #9a9a9a;
            color: #F2F2F2;
        }

        tr:nth-child(odd) {
            background-color: #F2F2F2;
            color: #262626;
        }
    </style>
    <title>List Student</title>
</head>

<body class="p-10 rounded-lg shadow-md">
    <div class="flex items-center justify-between pb-4">
        <h1 class="mb-0 text-5xl">List Student</h1>
        <a href="{{ route('student.create') }}"
            class="px-4 py-2 text-white bg-purple-900 rounded-full hover:bg-purple-600">Add Student</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="w-full mt-4 shadow-md table-auto">
        <thead>
            <tr>
                <th class="justify-center px-4 py-4 text-xl">#</th>
                <th class="justify-center px-4 py-4 text-xl">Name</th>
                <th class="justify-center px-4 py-4 text-xl">Surname</th>
                <th class="justify-center px-4 py-4 text-xl">Email</th>
                <th class="justify-center px-4 py-4 text-xl">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
                <tr>
                    <td class="px-4 py-2 text-center border">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 text-center border">{{ $student->name }}</td>
                    <td class="px-4 py-2 text-center border">{{ $student->surname }}</td>
                    <td class="px-4 py-2 text-center border">{{ $student->email }}</td>
                    <td class="px-4 py-2 text-center border">
                        <div class="flex justify-center space-x-1">
                            <a href="{{ route('student.show', $student->id) }}" type="button"
                                class="px-4 py-1 text-white bg-purple-900 rounded-full hover:bg-purple-600">Detail</a>
                            <a href="{{ route('student.edit', $student->id) }}" type="button"
                                class="px-4 py-1 text-white bg-purple-900 rounded-full hover:bg-purple-600">Edit</a>
                            <form action="{{ route('student.destroy', $student->id) }}" method="POST" type="button"
                                onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button type='submit'
                                    class='px-4 py-1 text-white bg-purple-300 rounded-full hover:bg-purple-400'>Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class='text-center' colspan='5'>No students found</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>

</html>
