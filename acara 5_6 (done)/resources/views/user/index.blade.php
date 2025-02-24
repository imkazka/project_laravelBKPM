<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nama Pengguna</title>
</head>
<body>
    <h1>nama Pengguna</h1>
    <table border ="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>