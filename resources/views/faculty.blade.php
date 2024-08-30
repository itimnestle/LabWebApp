<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    List of Faculties
    <table >
        <tr>
            <td>id</td>
            <td>name</td>
        </tr>
        @foreach ($faculty as $facultys)
            <tr>
                <td>{{ $facultys->facultyID }}</td>
                <td>{{ $facultys->facultyName }}</td>
            </tr>

@endforeach
    </table>
</body>
</html>
