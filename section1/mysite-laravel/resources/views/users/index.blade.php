<!-- resources/views/students/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <h1>User List</h1>

    <ul>
        <table border="1">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}
        </tr>
        @endforeach
        </table>
    </ul>

</body>
</html>
