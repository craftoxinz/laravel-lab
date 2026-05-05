<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
</head>
<body>
    <h1>Student List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Code</th>
            <th>Major</th>
        </tr>

        @php
            /**
             * @var \Illuminate\Database\Eloquent\Collection<App\Models\Student> $students
             */
        @endphp
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->code }}</td>
                <td>{{ $student->major }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
