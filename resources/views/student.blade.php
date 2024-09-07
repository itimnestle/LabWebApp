<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>

                <ul>
                    <a href="{{ route('dashboard') }}">Home</a>
                    <a href="{{ route('shwstd') }}" style="margin-left: 50px">Student List</a>

                </ul>

                </nav>


        <h1 align="center">Student Management จำนวนนักศึกษาทั้งหมด {{ $scount }}</h1>
    </header>
    <div class="card-form">
        <form action="/student/insert" method="post">
            <h2>Add Student</h2>
            @csrf
            <p>Student Name: <input type="text" name="stu_name" required></p>
            <p>Age: <input type="number" name="age" required></p>
            <p>Grade: <select name="grade" id="grade" required>

                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
            </p>
            <p><input type="submit" id="submit" value="Add Student"></p>
            </form>
    </div>
    <div class="card-show">
        <h2>Student List</h2>
        <table>
            <tr>
                <th>รหัสนักศึกษา</th>
            <th>ชื่อนามสกุล</th>
            <th>อายุ</th>
            <th>เกรด</th>
            </tr>
            @foreach ($std as $st )
                <tr>
                    <td>{{ $st->id }}</td>
                    <td>{{ $st->stu_name }}</td>
                    <td>{{ $st->age }}</td>
                    <td>{{ $st->grade}}</td>
                </tr>
            @endforeach

        </table>
    </div>




</body>
</html>
