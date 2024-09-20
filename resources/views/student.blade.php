<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="{{ route('dashboard') }}">Home</a>
                <a href="{{ route('shwstd') }}" >Student List</a>
            </ul>
        </nav>
        <h1 align="center">Student Management จำนวนนักศึกษาทั้งหมด</h1>
    </header>

    @if(!isset($stds))
    <div class="card-form" >
        <form action="/student/insert" method="post">
            <h2>Add Student</h2>
            @csrf
            <p>Student Name: <input type="text" name="stu_name" required></p>
            <p>Age: <input type="number" name="age" required></p>
            <p>Grade:
                <select name="grade" id="grade" required>
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

    @else

    <div class="card-form">
        <form action="/students/updated" method="post" >
            <h2>Update Student</h2>
            @csrf
           <p>Student ID:<input type="text" name="id" value="{{ $stds->id }}" readonly></p>
            <p>Student Name: <input type="text" name="stu_name" value="{{ $stds->stu_name }}" required></p>
            <p>Age: <input type="number" name="age"   value="{{ $stds->age }}" required></p>
            <p>Grade:
                <select name="grade" id="grade" required>
                    <option value="A" {{ $stds->grade == "A" ? "selected" : "" }}>A</option>
                    <option value="B" {{ $stds->grade == "B" ? "selected" : "" }}>B</option>
                    <option value="C" {{ $stds->grade == "C" ? "selected" : "" }}>C</option>
                    <option value="D" {{ $stds->grade == "D" ? "selected" : "" }}>D</option>
                    <option value="F" {{ $stds->grade == "F" ? "selected" : "" }}>F</option>
                </select>
            </p>
            <div class="d-flex justify-content-start "><p><input class="text-white btn bg-warning me-3" type="submit" id="submit" value="Update Student"></p>
                <p><a class="p-2 text-white btn bg-primary" href="/student">Back to insert student</a></p></div>



        </form>
    </div>

    @endif

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
                    <td><a class="text-white btn bg-warning" href="{{ route('update', ['id' => $st->id]) }}">Update</a></td>
                    <td>
                        <a class="debtn" onclick="return confirm('Are you sure you want to delete this student?')"
                         href="{{ route('delete', ['id' => $st->id]) }}"> Delete </a>

                    </td>

                </tr>
            @endforeach
        </table>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
